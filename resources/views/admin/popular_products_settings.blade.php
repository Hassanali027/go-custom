@extends('admin.layout')

@section('title', 'Popular Products Page Settings')
@section('heading', 'Popular Products Page Settings')

@section('content')
<form action="{{ route('admin.popularproducts.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if(session('success'))
        <div class="alert success" style="margin-bottom:1.5rem; padding:1rem; background:#d4edda; color:#155724; border-radius:0.5rem;">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert error" style="margin-bottom:1.5rem; padding:1rem; background:#f8d7da; color:#721c24; border-radius:0.5rem;">
            <ul style="margin:0; padding-left:1.5rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- POPULAR PRODUCTS SEO -->
    <div class="panel">
        <div class="panel-head">
            <h2 style="font-size:1.0625rem;"><i class="fa-solid fa-magnifying-glass" style="color:var(--primary); margin-right:0.5rem;"></i> Popular Products Page SEO</h2>
            <span style="color:var(--muted); font-size:0.75rem;">Meta title, description & keywords for the /popular-products/ page</span>
        </div>
        <div class="section">
            <div class="form-grid">
                <div class="field full"><label>Meta Title <small style="color:var(--muted); font-weight:400;">(50–60 characters recommended)</small></label><input name="popular_meta_title" value="{{ old('popular_meta_title', $settings['popular_meta_title'] ?? '') }}" maxlength="255"></div>
                <div class="field full"><label>Meta Description <small style="color:var(--muted); font-weight:400;">(150–160 characters recommended)</small></label><textarea name="popular_meta_description" rows="3" maxlength="1000">{{ old('popular_meta_description', $settings['popular_meta_description'] ?? '') }}</textarea></div>
                <div class="field full"><label>Meta Keywords <small style="color:var(--muted); font-weight:400;">(optional, comma separated)</small></label><input name="popular_meta_keywords" value="{{ old('popular_meta_keywords', $settings['popular_meta_keywords'] ?? '') }}"></div>
            </div>
        </div>
    </div>

    <!-- POPULAR PRODUCTS HERO -->
    <div class="panel">
        <div class="panel-head">
            <h2 style="font-size:1.0625rem;"><i class="fa-solid fa-box-open" style="color:var(--primary); margin-right:0.5rem;"></i> Popular Products Page Hero</h2>
            <span style="color:var(--muted); font-size:0.75rem;">Controls the hero shown on the Popular Products category-style page</span>
        </div>
        <div class="section">
            <div class="form-grid">
                <div class="field full"><label>Hero Title</label><input name="popular_hero_title" value="{{ old('popular_hero_title', $settings['popular_hero_title'] ?? '') }}"></div>
                <div class="field full"><label>Hero Description</label><textarea name="popular_hero_description" rows="3">{{ old('popular_hero_description', $settings['popular_hero_description'] ?? '') }}</textarea></div>
                <div class="field full">
                    <label>Hero Image</label>
                    @if(!empty($settings['popular_hero_image']))
                        @php $popularHeroImage = \Illuminate\Support\Str::startsWith($settings['popular_hero_image'], ['uploads/', 'storage/', 'images/']) ? asset($settings['popular_hero_image']) : asset('storage/' . $settings['popular_hero_image']); @endphp
                        <div class="single-image-wrapper" style="margin-bottom:0.625rem; display:flex; align-items:center; gap:0.75rem; background:var(--soft); padding:0.625rem 0.875rem; border-radius:0.625rem; width:fit-content; position:relative;">
                            <img src="{{ $popularHeroImage }}" alt="Popular Products Hero" style="height:3.75rem; object-fit:contain; border-radius:0.375rem;">
                            <span onclick="removeSingleImage(this, 'popular_hero_image')" style="position:absolute; top:-0.375rem; right:-0.375rem; background:#e74c3c; color:white; border-radius:50%; width:1.125rem; height:1.125rem; display:flex; align-items:center; justify-content:center; font-size:0.875rem; font-weight:bold; cursor:pointer;">&times;</span>
                        </div>
                    @endif
                    <input type="file" name="popular_hero_image" accept="image/*">
                </div>
                <div class="field"><label>Primary Button Text</label><input name="popular_hero_primary_button_text" value="{{ old('popular_hero_primary_button_text', $settings['popular_hero_primary_button_text'] ?? 'Get Instant Quote') }}"></div>
                <div class="field"><label>Primary Button Link</label><input name="popular_hero_primary_button_url" value="{{ old('popular_hero_primary_button_url', $settings['popular_hero_primary_button_url'] ?? '/request-quote/') }}"></div>
            </div>
        </div>
    </div>

    <!-- POPULAR CONTENT SECTION -->
    <div class="panel">
        <div class="panel-head">
            <h2 style="font-size: 1.0625rem;"><i class="fa-solid fa-code" style="color:var(--primary); margin-right: 0.5rem;"></i> Content Section</h2>
            <span style="color:var(--muted); font-size: 0.75rem;">Rich text editor with Raw HTML Code mode (&lt;/&gt;) and H1-H6 Headings</span>
        </div>
        <div class="section">
            <div class="field full">
                <textarea id="ck_popular_content_section" name="popular_content_section">{{ old('popular_content_section', $settings['popular_content_section'] ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <!-- POPULAR PRODUCTS FAQS -->
    <div class="panel">
        <div class="panel-head" style="display: flex; align-items: center; justify-content: space-between;">
            <div>
                <h2 style="font-size: 1.0625rem;"><i class="fa-solid fa-circle-question" style="color:var(--primary); margin-right: 0.5rem;"></i> Popular Products Page FAQs</h2>
                <span style="color:var(--muted); font-size: 0.75rem;">Add question & answer pairs for the Popular Products page</span>
            </div>
            <button type="button" class="btn light" onclick="addPopularFaqRow()" style="font-size: 0.75rem; padding: 0.375rem 0.75rem;">
                <i class="fa-solid fa-plus"></i> Add Question
            </button>
        </div>
        <div class="section">
            <div id="popularFaqContainer" style="display: flex; flex-direction: column; gap: 1rem;">
                @php $popularFaqs = (array) ($settings['popular_faqs'] ?? []); @endphp
                @forelse($popularFaqs as $index => $faq)
                    <div class="faq-row" style="background: #faf8f9; padding: 1.125rem; border-radius: 0.75rem; border: 1px solid var(--line); position: relative;">
                        <button type="button" onclick="this.closest('.faq-row').remove()" style="position: absolute; top: 0.75rem; right: 0.75rem; border: none; background: #fff0f0; color: #a52b2b; width: 1.75rem; height: 1.75rem; border-radius: 0.375rem; cursor: pointer;" title="Delete FAQ">
                            <i class="fa-solid fa-trash" style="font-size: 0.75rem;"></i>
                        </button>
                        <div class="field" style="margin-bottom: 0.625rem; width: calc(100% - 2.5rem);">
                            <label>Question</label>
                            <input type="text" name="popular_faq_questions[]" value="{{ $faq['question'] ?? '' }}" placeholder="Enter Question...">
                        </div>
                        <div class="field">
                            <label>Answer</label>
                            <textarea name="popular_faq_answers[]" rows="2" placeholder="Enter Answer...">{{ $faq['answer'] ?? '' }}</textarea>
                        </div>
                    </div>
                @empty
                    <div class="faq-row" style="background: #faf8f9; padding: 1.125rem; border-radius: 0.75rem; border: 1px solid var(--line); position: relative;">
                        <button type="button" onclick="this.closest('.faq-row').remove()" style="position: absolute; top: 0.75rem; right: 0.75rem; border: none; background: #fff0f0; color: #a52b2b; width: 1.75rem; height: 1.75rem; border-radius: 0.375rem; cursor: pointer;" title="Delete FAQ">
                            <i class="fa-solid fa-trash" style="font-size: 0.75rem;"></i>
                        </button>
                        <div class="field" style="margin-bottom: 0.625rem; width: calc(100% - 2.5rem);">
                            <label>Question</label>
                            <input type="text" name="popular_faq_questions[]" placeholder="Enter Question...">
                        </div>
                        <div class="field">
                            <label>Answer</label>
                            <textarea name="popular_faq_answers[]" rows="2" placeholder="Enter Answer..."></textarea>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- SAVE BUTTON -->
    <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
        <button type="submit" class="btn" style="padding: 0.875rem 2rem; font-size: 0.9375rem;">
            <i class="fa-solid fa-floppy-disk"></i> Save Popular Products Settings
        </button>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof tinymce !== 'undefined') {
            tinymce.init({
                ...window.tinyMceUploadConfig,
                selector: '#ck_popular_content_section',
                height: 420,
                plugins: 'code advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
                toolbar: 'undo redo | blocks | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | code fullscreen preview',
                block_formats: 'Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6; Preformatted=pre',
                branding: false,
                promotion: false,
                content_style: 'body { font-family:"DM Sans",sans-serif; font-size:0.875rem; line-height:1.6; }'
            });
        }
    });

    function addPopularFaqRow() {
        const container = document.getElementById('popularFaqContainer');
        const row = document.createElement('div');
        row.className = 'faq-row';
        row.style.cssText = 'background: #faf8f9; padding: 1.125rem; border-radius: 0.75rem; border: 1px solid var(--line); position: relative;';
        row.innerHTML = `
            <button type="button" onclick="this.closest('.faq-row').remove()" style="position: absolute; top: 0.75rem; right: 0.75rem; border: none; background: #fff0f0; color: #a52b2b; width: 1.75rem; height: 1.75rem; border-radius: 0.375rem; cursor: pointer;" title="Delete FAQ">
                <i class="fa-solid fa-trash" style="font-size: 0.75rem;"></i>
            </button>
            <div class="field" style="margin-bottom: 0.625rem; width: calc(100% - 2.5rem);">
                <label>Question</label>
                <input type="text" name="popular_faq_questions[]" placeholder="Enter Question...">
            </div>
            <div class="field">
                <label>Answer</label>
                <textarea name="popular_faq_answers[]" rows="2" placeholder="Enter Answer..."></textarea>
            </div>
        `;
        container.appendChild(row);
    }

    function removeSingleImage(btn, fieldName) {
        if (!confirm('Are you sure you want to remove this image?')) return;
        const wrapper = btn.closest('.single-image-wrapper');
        const form = wrapper.closest('form');
        let hidden = form.querySelector('input[name="remove_' + fieldName + '"]');
        if (!hidden) {
            hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'remove_' + fieldName;
            form.appendChild(hidden);
        }
        hidden.value = '1';
        wrapper.style.display = 'none';
    }
</script>
@endsection
