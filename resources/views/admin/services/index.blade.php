@extends('admin.layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Services</h1>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add Service</a>
            </div>

            @if (session('success'))
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
                                    <th>Short Desc</th>
                                    <th>Image</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $index => $service)
                                    <tr>
                                        <td>{{ $services->firstItem() + $index }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ Str::limit($service->short_desc, 50) }}</td>
                                        <td>
                                            @if ($service->image)
                                                <img src="{{ asset($service->image) }}" alt="img"
                                                    style="height:50px;">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($service->icon_image)
                                                <img src="{{ asset($service->icon_image) }}" alt="icon"
                                                    style="height:40px;">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>

                                            <form action="{{ route('admin.services.destroy', $service->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('Are you sure you want to delete this service?')"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $services->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
