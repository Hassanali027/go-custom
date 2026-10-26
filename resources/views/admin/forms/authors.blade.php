@extends('admin.layout')
@section('title', ($item ? 'Edit ' : 'Add ') . $meta['singular'])
@section('heading', ($item ? 'Edit ' : 'Add ') . $meta['singular'])
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>

@php
    $v = fn($key, $default = '') => old($key, $item[$key] ?? $default);
    $editing = (bool)$item;
    $resolveImg = fn($path) => empty($path) ? '' : (\Illuminate\Support\Str::startsWith($path, ['storage/', 'uploads/', 'images/']) ? asset($path) : asset('storage/' . $path));
@endphp

@if($errors->any())
    <div class="alert" style="background:#fff0f0; color:#9c2828">
        {{ $errors->first() }}
    </div>
@endif

<form class="panel" style="margin-top:0" method="post" enctype="multipart/form-data" action="{{ $editing ? route('admin.module.update', [$module, $item['id']]) : route('admin.module.store', $module) }}">
    @csrf
    @if($editing)
        @method('PUT')
    @endif

    <div class="section">
        <h3>Basic Information</h3>
        <div class="form-grid">
            <div class="field">
                <label>Author Name *</label>
                <input name="title" required value="{{ $v('title') }}" placeholder="Enter author name">
            </div>
            
            <div class="field">
                <label>Author Designation / Role</label>
                <input name="designation" value="{{ $v('designation') }}" placeholder="e.g. Content Strategier Writer">
                <small style="color:var(--muted); font-size:0.75rem;">Shown beside the author's name in the blog post sidebar.</small>
            </div>


            <div class="field">
                <label>URL Slug</label>
                <input name="slug" value="{{ $v('slug') }}" placeholder="auto-generated-from-name">
            </div>
            
            <div class="field">
                <label>Status</label>
                <select name="status">
                    <option value="published" @selected($v('status') === 'published')>Published</option>
                    <option value="draft" @selected($v('status') === 'draft')>Draft</option>
                </select>
            </div>
            
            <div class="field">
                <label>Profile Image</label>
                @if($editing && !empty($item['image']))
                    <div style="margin-bottom:0.5rem">
                        <img src="{{ $resolveImg($item['image']) }}" style="height:3.75rem; border-radius:0.25rem; border:1px solid #ddd">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*">
            </div>
        </div>
    </div>
    
    <div class="section">
        <h3>Author Expertise</h3>
        <div class="form-grid">
            <div class="field full">
                <label>Author Expertise</label>
                <textarea name="bio" rows="3" placeholder="e.g. 5+ years in content strategy - building packaging case studies, guides and blogs...">{{ $v('bio') }}</textarea>
                <small style="color:var(--muted); font-size:0.75rem;">Displayed directly underneath the author's avatar and name in the blog post sidebar.</small>
            </div>
        </div>
    </div>

    <div class="section">
        <h3>Description</h3>
        <div class="form-grid">
            <div class="field full">
                <label>Description</label>
                <textarea name="description" rows="4" placeholder="Enter author description...">{{ $v('description') }}</textarea>
                <small style="color:var(--muted); font-size:0.75rem;">Displayed in the blog author sidebar between horizontal lines (not shown on author page).</small>
            </div>
        </div>
    </div>

    <div class="section">
        <h3>Social Links</h3>
        <div class="form-grid">
            <div class="field">
                <label>Facebook URL</label>
                <input type="url" name="facebook" value="{{ $v('facebook') }}" placeholder="https://facebook.com/author">
            </div>
            
            <div class="field">
                <label>Twitter URL</label>
                <input type="url" name="twitter" value="{{ $v('twitter') }}" placeholder="https://twitter.com/author">
            </div>
            
            <div class="field">
                <label>LinkedIn URL</label>
                <input type="url" name="linkedin" value="{{ $v('linkedin') }}" placeholder="https://linkedin.com/in/author">
            </div>
        </div>
    </div>
    
    <div class="form-actions">
        <a href="{{ route('admin.module.index', $module) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save {{ $meta['singular'] }}</button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof tinymce !== 'undefined') {
            tinymce.init({
                ...window.tinyMceUploadConfig,
                selector: 'textarea[name="description"]',
                height: 300,
                plugins: 'code advlist autolink lists link charmap preview searchreplace visualblocks wordcount',
                toolbar: 'undo redo | fontfamily fontsize blocks | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | link removeformat | code',
                fontsize_formats: '10px 12px 13px 14px 15px 16px 18px 20px 22px 24px 28px 32px 36px',
                branding: false,
                promotion: false,
                menubar: false,
                content_style: 'body { font-family:"DM Sans",-apple-system,BlinkMacSystemFont,sans-serif; font-size:14px; line-height:1.6; color:#111; }',
                setup: function (editor) {
                    editor.on('change keyup', function () {
                        editor.save();
                    });
                }
            });
        }

        const form = document.querySelector('form.panel');
        if (form) {
            form.addEventListener('submit', function () {
                if (typeof tinymce !== 'undefined') {
                    tinymce.triggerSave();
                }
            });
        }
    });
</script>

@endsection
