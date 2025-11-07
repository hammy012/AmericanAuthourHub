@extends('admin.layouts.app')

@section('title', 'Blogs')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive table-centered">
                    <table class="table mb-0">
                        <thead class="bg-light bg-opacity-50">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Thumbnail</th>
                                <th>Tags</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $index => $blog)
                            <tr>
                                <td>{{ $blogs->firstItem() + $index }}</td>
                                <td>{{ Str::limit($blog->title, 60) }}</td>
                                <td>{{ optional($blog->date)->format('Y-m-d') ?? '-' }}</td>
                                <td>
                                    @if($blog->thumbnail)
                                        <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="thumb" style="height:50px;">
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($blog->tags))
                                        @foreach($blog->tags as $t)
                                            <span class="badge bg-secondary">{{ $t }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>

                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to delete this blog?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
