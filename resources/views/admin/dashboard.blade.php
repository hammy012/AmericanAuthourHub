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
                                            <h3 class="text-dark mt-1 mb-0">1,245</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="text-success">+8.2%</span>
                                            <span class="text-muted ms-1 fs-12">Last Month</span>
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
                                            <h3 class="text-dark mt-1 mb-0">560</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="text-danger">-3.5%</span>
                                            <span class="text-muted ms-1 fs-12">Last Month</span>
                                        </div>
                                        <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
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
                                                <iconify-icon icon="solar:user-circle-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Services</p>
                                            <h3 class="text-dark mt-1 mb-0">12</h3>
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
                                                <iconify-icon icon="solar:user-circle-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total FAQs</p>
                                            <h3 class="text-dark mt-1 mb-0">34</h3>
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
                            <h4 class="card-title">Recent Users</h4>
                        </div>
                        <div class="table-responsive table-centered">
                            <table class="table mb-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>
                                        <th class="ps-3">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-3">1</td>
                                        <td>Ali Raza</td>
                                        <td>ali.raza@example.com</td>
                                        <td><a href="#!" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                                                View</a></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">2</td>
                                        <td>Fatima Khan</td>
                                        <td>fatima.k@example.com</td>
                                        <td><a href="#!" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                                                View</a></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">3</td>
                                        <td>Ahmad Bilal</td>
                                        <td>ahmad.bilal@example.com</td>
                                        <td><a href="#!" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                                                View</a></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">4</td>
                                        <td>Sara Malik</td>
                                        <td>sara.malik@example.com</td>
                                        <td><a href="#!" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                                                View</a></td>
                                    </tr>
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
                        &copy; Ebook Agency. Crafted with
                        <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon>
                        <a href="" class="fw-bold footer-text" target="_blank">HashTechmeta</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection
