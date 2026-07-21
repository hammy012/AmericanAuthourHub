@extends('admin.layouts.app')
@section('header', 'Page Heading')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:user-circle-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Users</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $totalUsers }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:document-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Blogs</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $totalBlogs }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="fa6-solid:handshake"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Services</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $totalServices }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:question-circle-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total FAQs</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $totalFaqs }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Recent Contacts</h4>
                        </div>
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
                                @foreach ($recentContacts as $index => $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
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
<<<<<<< HEAD
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        &copy; American Author Hub. Crafted with
                        <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon>
                        <a href="" class="fw-bold footer-text" target="_blank">HashTechmeta</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection
