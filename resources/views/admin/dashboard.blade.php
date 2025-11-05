@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-3xl">Welcome, {{ auth('admin')->user()->name }}</h1>

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="mt-4 px-4 py-2 rounded bg-red-600 text-white">Logout</button>
    </form>
</div>
@endsection
