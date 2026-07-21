@extends('admin.layouts.app')

@section('title', 'Contact Messages')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Contact Messages</h1>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Location</th>
                                    <th>Received</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $c)
                                    <tr>
                                        <td>{{ $contacts->firstItem() + $index }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->phone }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($c->message, 60) }}</td>
                                        <td>
                                            {{ $c->city ? $c->city . ' / ' : '' }}
                                            {{ $c->country ?? '-' }}
                                        </td>
                                        <td>{{ $c->created_at->format('d M Y, h:i A') }}</td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ route('admin.contact-view', $c->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <form action="{{ route('admin.contact-delete', $c->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure you want to delete this message?')" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $contacts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
