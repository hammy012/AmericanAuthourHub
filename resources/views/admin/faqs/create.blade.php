@extends('admin.layouts.app')

@section('title', 'Add FAQ')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New FAQ</h1>
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Back to list</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.faq-store') }}">
                @csrf
                <div class="row">
                    {{--  <div class="col-md-12 mb-3">
                        <label>Topic</label>
                        <input type="text" name="topic" class="form-control" value="{{ old('topic') }}">
                    </div>  --}}

                    <div class="col-md-12 mb-3">
                        <label>Question <span class="text-danger">*</span></label>
                        <input type="text" name="question" class="form-control" value="{{ old('question') }}" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Answer</label>
                        <textarea name="answer" class="form-control tinymce" rows="6">{{ old('answer') }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3 form-check">
                        <input type="checkbox" name="is_active" id="is_active" class="form-check-input" checked>
                        <label for="is_active" class="form-check-label">Active</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-secondary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        if (typeof tinymce !== 'undefined') {
            tinymce.remove();
            tinymce.init({
                selector: 'textarea.tinymce',
                height: 250,
                plugins: 'link image media table code lists',
                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link | code',
                menubar: false
            });
        } else {
            // If TinyMCE is not included globally, include CDN (optional)
            console.warn('TinyMCE not found: include it in app.blade.php or remove this warning.');
        }
    </script>
@endsection
