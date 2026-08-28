@extends('admin.layout')
@section('title', $meta['title'])
@section('heading', $meta['title'])

@section('content')
<div class="panel" style="margin-top:0">
    <div class="panel-head" style="display:flex; justify-content:space-between; align-items:center; gap: 0.9375rem; flex-wrap: wrap;">
        <h2 style="margin: 0;">All {{ $meta['title'] }}</h2>
        
        @if($items)
        <div style="flex-grow: 1; max-width: 18.75rem; position: relative;">
            <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--muted);"></i>
            <input type="text" id="searchInput" placeholder="Search {{ strtolower($meta['title']) }}..." style="width: 100%; padding: 0.5rem 0.75rem 0.5rem 2.1875rem; border: 1px solid var(--line); border-radius: 0.5rem; font-size: 0.875rem; outline: none; transition: border-color 0.2s;">
        </div>
        @endif
        
        <a class="btn" href="{{ route('admin.module.create', $module) }}" style="white-space: nowrap;">＋ Add {{ $meta['singular'] }}</a>
    </div>
    
    @if(!$items)
        <div class="empty" style="padding: 2.5rem; text-align: center;">
            <h3 style="margin-bottom: 0.625rem;">No {{ strtolower($meta['title']) }} yet</h3>
            <p style="color: var(--muted);">Create your first {{ strtolower($meta['singular']) }} to get started.</p>
        </div>
    @else
        <div class="table-wrap">
            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(array_reverse($items) as $item)
                    <tr class="data-row">
                        <td class="searchable"><strong>{{ $item['title'] }}</strong></td>
                        <td class="searchable">/{{ $item['slug'] }}</td>
                        <td><span class="status">{{ ucfirst($item['status'] ?? 'draft') }}</span></td>
                        <td>{{ $item['updated_at'] ?? '' }}</td>
                        <td style="display:flex;gap:0.4375rem">
                            <a class="btn light" href="{{ route('admin.module.edit', [$module, $item['id']]) }}">Edit</a>
                            <form method="post" action="{{ route('admin.module.destroy', [$module, $item['id']]) }}">
                                @csrf 
                                @method('DELETE')
                                <button class="btn danger" onclick="return confirm('Delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="noResults" style="display: none; padding: 1.875rem; text-align: center; color: var(--muted);">
                No matching {{ strtolower($meta['title']) }} found.
            </div>
        </div>
    @endif
</div>

@if($items)
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const rows = document.querySelectorAll('#dataTable .data-row');
        const noResults = document.getElementById('noResults');
        const table = document.getElementById('dataTable');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                let hasVisibleRow = false;

                rows.forEach(row => {
                    // Search in the text of the first two columns (Title and Slug)
                    const titleText = row.children[0].textContent.toLowerCase();
                    const slugText = row.children[1].textContent.toLowerCase();
                    
                    if (titleText.includes(query) || slugText.includes(query)) {
                        row.style.display = '';
                        hasVisibleRow = true;
                    } else {
                        row.style.display = 'none';
                    }
                });

                if (hasVisibleRow) {
                    table.style.display = '';
                    noResults.style.display = 'none';
                } else {
                    table.style.display = 'none';
                    noResults.style.display = 'block';
                }
            });
            
            // Add focus styles dynamically
            searchInput.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary)';
                this.style.boxShadow = '0 0 0 0.1875rem rgba(255,180,0,0.16)';
            });
            
            searchInput.addEventListener('blur', function() {
                this.style.borderColor = 'var(--line)';
                this.style.boxShadow = 'none';
            });
        }
    });
</script>
@endif
@endsection
