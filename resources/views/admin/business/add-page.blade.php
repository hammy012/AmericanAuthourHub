@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Business Setting</h1>
                <a href="/admin/dashboard" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i
                        class="fas fa-home"></i>
                    Dashboard
                </a>
            </div>
            <form method="POST" action="{{ route('admin.business-setting-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" name="company_name" value="{{ $data->company_name }}" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ $data->phone }}" class="form-control" id="subtitle">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" value="{{ $data->email }}" class="form-control" id="subtitle">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="ceo" class="form-label">CEO</label>
                            <input type="text" name="ceo" value="{{ $data->ceo }}" class="form-control" id="subtitle">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-4">Submit</button>
            </form>


        </div>
    </div>


@endsection
