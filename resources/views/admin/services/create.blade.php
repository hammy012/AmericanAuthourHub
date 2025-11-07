@extends('admin.layouts.app')

@section('title', 'Add Service')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Service</h1>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back to list</a>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Short Description</label>
                    <input type="text" name="short_desc" class="form-control" value="{{ old('short_desc') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Section Title</label>
                    <input type="text" name="sec_title" class="form-control" value="{{ old('sec_title') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control tinymce" rows="8">{{ old('description') }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Icon Image</label>
                    <input type="file" name="icon_image" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-outline-secondary mt-3">Submit</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // If TinyMCE is included globally in app.blade.php, initialize selector:
    if (typeof tinymce !== 'undefined') {
        tinymce.remove(); // remove previous instances (safe)
        tinymce.init({
            selector: 'textarea.tinymce',
            height: 300,
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
            menubar: false
        });
    }
</script>
@endsection
