@extends('admin.layouts.app')

@section('content')

    <div class="container mx-auto max-w-md mt-24">
        <h2 class="text-2xl mb-4">Admin Login</h2>

        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf

            <div class="mb-3">
                <label for="email">Email</label>
                <input id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full p-2 border rounded" />
                @error('email') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required class="w-full p-2 border rounded" />
                @error('password') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white">Login</button>
            </div>
        </form>
    </div>

@endsection
