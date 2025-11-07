@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Blog</h1>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back to list</a>
        </div>

        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul></div>
        @endif

        <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12 mb-3">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control">
                    @if($blog->thumbnail)
                        <div class="mt-2"><img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="thumb" style="height:80px;"></div>
                    @endif
                </div>

                <div class="col-md-6 mb-3">
                    <label>Images (upload to append)</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    @if(!empty($blog->images) && is_array($blog->images))
                        <div class="mt-2 d-flex flex-wrap gap-2">
                            @foreach($blog->images as $img)
                                <div style="margin-right:8px;">
                                    <img src="{{ asset('storage/'.$img) }}" alt="img" style="height:70px;">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="col-md-4 mb-3">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', optional($blog->date)->format('Y-m-d')) }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control tinymce" rows="8">{{ old('description', $blog->description) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Tags (comma separated)</label>
                    <input type="text" name="tags" class="form-control" placeholder="tag1, tag2" value="{{ old('tags', !empty($blog->tags) ? implode(', ', $blog->tags) : '') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $blog->meta_description) }}</textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-secondary mt-3">Update</button>
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
            height: 350,
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code',
            menubar: false
        });
    }
</script>
@endsection
