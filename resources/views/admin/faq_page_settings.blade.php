@extends('admin.layout')

@section('title', 'FAQ Page Settings - Admin')
@section('heading', 'FAQ Page Settings')

@section('content')
<style>
    .faq-heading-card {
        background: #ffffff;
        border: 1px solid #ddd8df;
        border-radius: 0.5rem;
        padding: 1.25rem;
        margin-bottom: 1.25rem;
        position: relative;
    }
    .faq-heading-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.9375rem;
        padding-bottom: 0.625rem;
        border-bottom: 1px solid #f0f0f0;
    }
    .faq-heading-card-header input {
        font-size: 1rem;
        font-weight: bold;
        border: 1px solid #ddd8df;
        border-radius: 0.25rem;
        padding: 0.5rem 0.75rem;
        width: 100%;
        max-width: 25rem;
    }
    .faq-row {
        background: #faf8f9;
        padding: 0.9375rem;
        border-radius: 0.5rem;
        border: 1px solid #ddd8df;
        margin-bottom: 0.625rem;
        position: relative;
    }
    .btn-remove-heading {
        background: #fff0f0;
        color: #a52b2b;
        border: none;
        padding: 0.5rem 0.75rem;
        border-radius: 0.375rem;
        cursor: pointer;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .btn-remove-faq {
        position: absolute;
        top: 0.9375rem;
        right: 0.9375rem;
        background: transparent;
        color: #a52b2b;
        border: none;
        cursor: pointer;
        font-size: 0.875rem;
    }
</style>

<div class="card" style="max-width: 56.25rem;">
    <div class="card-header">
        <h2 class="card-title">Manage Global FAQ Page</h2>
    </div>
    
    @if(session('success'))
        <div style="padding:0.9375rem; background:#d4edda; color:#155724; border-radius:0.375rem; margin-bottom:1.25rem;">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div style="padding:0.9375rem; background:#f8d7da; color:#721c24; border-radius:0.375rem; margin-bottom:1.25rem;">
            <ul style="margin: 0; padding-left: 1.25rem;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.faqpage.update') }}" method="POST">
        @csrf
        
        <div style="margin-bottom:1.875rem;">
            <h3 style="font-size:1.125rem; margin-bottom:0.9375rem; padding-bottom:0.5rem; border-bottom:1px solid #eaeaea;">Page Configuration</h3>
            
            <div class="form-group">
                <label class="form-label">Page Title</label>
                <input type="text" name="faq_page_title" class="form-input" value="{{ old('faq_page_title', $settings['faq_page_title'] ?? 'Frequently Asked Questions') }}" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">URL Slug</label>
                <input type="text" name="faq_page_slug" class="form-input" value="{{ old('faq_page_slug', $settings['faq_page_slug'] ?? 'frequently-asked-questions') }}" required>
                <small style="color:#666; font-size:0.75rem;">The URL where this page will be available (e.g. yourwebsite.com/<b>frequently-asked-questions</b>)</small>
            </div>
        </div>

        <div style="margin-bottom:1.875rem;">
            <h3 style="font-size:1.125rem; margin-bottom:0.9375rem; padding-bottom:0.5rem; border-bottom:1px solid #eaeaea;">FAQ Sections (Headings & Q/A)</h3>
            
            <div id="faq-sections-container">
                @php $sections = $settings['faq_page_sections'] ?? []; @endphp
                
                @if(empty($sections))
                    <!-- Initial Empty Section -->
                    <div class="faq-heading-card" data-index="0">
                        <div class="faq-heading-card-header">
                            <input type="text" name="headings[0]" placeholder="Enter Heading (e.g. Order & Prices)" value="">
                            <button type="button" class="btn-remove-heading" onclick="removeHeading(this)">Delete Heading</button>
                        </div>
                        <div class="faqs-container">
                            <div class="faq-row">
                                <button type="button" class="btn-remove-faq" onclick="removeFaq(this)"><i class="fa-solid fa-trash"></i></button>
                                <div class="form-group" style="margin-bottom: 0.625rem;">
                                    <label class="form-label" style="font-size: 0.8125rem;">Question</label>
                                    <input type="text" name="questions[0][]" class="form-input" placeholder="Enter Question">
                                </div>
                                <div class="form-group" style="margin-bottom: 0;">
                                    <label class="form-label" style="font-size: 0.8125rem;">Answer</label>
                                    <textarea name="answers[0][]" class="form-input" rows="2" placeholder="Enter Answer"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" style="font-size: 0.75rem; padding: 0.375rem 0.75rem; margin-top: 0.625rem;" onclick="addFaq(this, 0)">+ Add Question</button>
                    </div>
                @else
                    <!-- Load Saved Sections -->
                    @foreach($sections as $index => $section)
                        <div class="faq-heading-card" data-index="{{ $index }}">
                            <div class="faq-heading-card-header">
                                <input type="text" name="headings[{{ $index }}]" placeholder="Enter Heading (e.g. Order & Prices)" value="{{ $section['heading'] ?? '' }}">
                                <button type="button" class="btn-remove-heading" onclick="removeHeading(this)">Delete Heading</button>
                            </div>
                            <div class="faqs-container">
                                @php $faqs = $section['faqs'] ?? []; @endphp
                                @if(empty($faqs))
                                    <div class="faq-row">
                                        <button type="button" class="btn-remove-faq" onclick="removeFaq(this)"><i class="fa-solid fa-trash"></i></button>
                                        <div class="form-group" style="margin-bottom: 0.625rem;">
                                            <label class="form-label" style="font-size: 0.8125rem;">Question</label>
                                            <input type="text" name="questions[{{ $index }}][]" class="form-input" placeholder="Enter Question">
                                        </div>
                                        <div class="form-group" style="margin-bottom: 0;">
                                            <label class="form-label" style="font-size: 0.8125rem;">Answer</label>
                                            <textarea name="answers[{{ $index }}][]" class="form-input" rows="2" placeholder="Enter Answer"></textarea>
                                        </div>
                                    </div>
                                @else
                                    @foreach($faqs as $faq)
                                        <div class="faq-row">
                                            <button type="button" class="btn-remove-faq" onclick="removeFaq(this)"><i class="fa-solid fa-trash"></i></button>
                                            <div class="form-group" style="margin-bottom: 0.625rem;">
                                                <label class="form-label" style="font-size: 0.8125rem;">Question</label>
                                                <input type="text" name="questions[{{ $index }}][]" class="form-input" placeholder="Enter Question" value="{{ $faq['question'] ?? '' }}">
                                            </div>
                                            <div class="form-group" style="margin-bottom: 0;">
                                                <label class="form-label" style="font-size: 0.8125rem;">Answer</label>
                                                <textarea name="answers[{{ $index }}][]" class="form-input" rows="2" placeholder="Enter Answer">{{ $faq['answer'] ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-secondary" style="font-size: 0.75rem; padding: 0.375rem 0.75rem; margin-top: 0.625rem;" onclick="addFaq(this, {{ $index }})">+ Add Question</button>
                        </div>
                    @endforeach
                @endif
            </div>

            <button type="button" id="add-heading-btn" class="btn" style="background:#f0f0f0; color:#333; margin-top:0.625rem;">
                + Add New Heading Section
            </button>
        </div>

        <div style="margin-top: 1.875rem;">
            <button type="submit" class="btn btn-primary" style="padding: 0.625rem 1.5rem; font-size: 1rem;">Save Settings</button>
        </div>
    </form>
</div>

<script>
    let sectionIndex = {{ count($sections ?? []) > 0 ? count($sections) : 1 }};

    document.getElementById('add-heading-btn').addEventListener('click', function() {
        const container = document.getElementById('faq-sections-container');
        const currentIndex = sectionIndex++;
        
        const html = `
            <div class="faq-heading-card" data-index="${currentIndex}">
                <div class="faq-heading-card-header">
                    <input type="text" name="headings[${currentIndex}]" placeholder="Enter Heading (e.g. New Section)">
                    <button type="button" class="btn-remove-heading" onclick="removeHeading(this)">Delete Heading</button>
                </div>
                <div class="faqs-container">
                    <div class="faq-row">
                        <button type="button" class="btn-remove-faq" onclick="removeFaq(this)"><i class="fa-solid fa-trash"></i></button>
                        <div class="form-group" style="margin-bottom: 0.625rem;">
                            <label class="form-label" style="font-size: 0.8125rem;">Question</label>
                            <input type="text" name="questions[${currentIndex}][]" class="form-input" placeholder="Enter Question">
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label" style="font-size: 0.8125rem;">Answer</label>
                            <textarea name="answers[${currentIndex}][]" class="form-input" rows="2" placeholder="Enter Answer"></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" style="font-size: 0.75rem; padding: 0.375rem 0.75rem; margin-top: 0.625rem;" onclick="addFaq(this, ${currentIndex})">+ Add Question</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    });

    function addFaq(btnElement, index) {
        const faqsContainer = btnElement.previousElementSibling;
        const html = `
            <div class="faq-row">
                <button type="button" class="btn-remove-faq" onclick="removeFaq(this)"><i class="fa-solid fa-trash"></i></button>
                <div class="form-group" style="margin-bottom: 0.625rem;">
                    <label class="form-label" style="font-size: 0.8125rem;">Question</label>
                    <input type="text" name="questions[${index}][]" class="form-input" placeholder="Enter Question">
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label" style="font-size: 0.8125rem;">Answer</label>
                    <textarea name="answers[${index}][]" class="form-input" rows="2" placeholder="Enter Answer"></textarea>
                </div>
            </div>
        `;
        faqsContainer.insertAdjacentHTML('beforeend', html);
    }

    function removeFaq(btnElement) {
        btnElement.closest('.faq-row').remove();
    }

    function removeHeading(btnElement) {
        if(confirm('Are you sure you want to delete this heading and all its FAQs?')) {
            btnElement.closest('.faq-heading-card').remove();
        }
    }
</script>
@endsection
