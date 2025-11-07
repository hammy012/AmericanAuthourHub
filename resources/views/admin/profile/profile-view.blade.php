@extends('admin.layouts.app')
@section('header', 'Page Heading')
@section('content')


    <div class="page-content">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif

        <!-- Start Container Fluid -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Profile :</h1>
                <a href="/admin" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i class="fas fa-home"></i>
                    Dashboard
                </a>
            </div>

            <div class="form">
                @php($admin = App\Models\Admin::first())
                <form method="POST" action="{{ route('admin.profile-update', ['id' => $admin->id]) }}">
                    @csrf
                    <div class="container">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name : </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$admin->name}}" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email : </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="{{$admin->email}}" name="email" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Your Password : </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                            </div>
                        </div>


                        <div class="form-group row mt-5">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">New Password : </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputNewPassword" name="npassword" placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password : </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputConfirmPassword" name="cpassword" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <!-- End Container Fluid -->

        <!-- ========== Footer Start ========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; Erotics ASMR Delights. Crafted by <iconify-icon
                            icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                            href="https://mdhammad.netlify.app/" class="fw-bold footer-text" target="_blank">Codesgenius</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== Footer End ========== -->

    </div>

@endsection
