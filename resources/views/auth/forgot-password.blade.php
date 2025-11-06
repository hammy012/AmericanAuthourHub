@extends('layouts.app')

@section('title', 'American Author Hub | Forgot Password')

@section('content')
    <style>
        :root {
            --accent-red: #9F0B07;
            --accent-blue: #002768;
            --muted: #6b7280;
            --card-bg: #ffffff;
            --card-border: rgba(2, 39, 104, 0.06);
            --card-shadow: 0 30px 60px rgba(2, 39, 104, 0.12);
        }

        .auth-page {
            min-height: calc(100vh - 160px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
            background: #fbfdff;
        }

        .auth-card {
            width: 100%;
            max-width: 520px;
            background: var(--card-bg);
            border-radius: 14px;
            box-shadow: var(--card-shadow);
            border: 1px solid var(--card-border);
            overflow: hidden;
            padding: 34px;
            box-sizing: border-box;
        }

        .brand {
            text-align: center;
            margin-bottom: 16px;
        }

        .brand .logo {
            font-size: 36px;
            font-weight: 900;
            color: var(--accent-red);
            letter-spacing: -0.6px;
        }

        .card-title {
            text-align: center;
            margin-top: 6px;
            margin-bottom: 18px;
        }

        .card-title h2 {
            margin: 0;
            font-size: 22px;
            color: #0f172a;
            font-weight: 900;
        }

        .card-title p {
            margin: 6px 0 0;
            color: var(--muted);
            font-size: 14px;
        }

        .status {
            background: #f1f5f9;
            padding: 10px 12px;
            border-radius: 8px;
            color: #0f172a;
            font-size: 13px;
            margin-bottom: 12px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #374151;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input[type="email"] {
            width: 100%;
            padding: 13px 14px;
            border-radius: 10px;
            border: 1px solid #e8eaf0;
            font-size: 15px;
            box-sizing: border-box;
            background: #fbfdff;
        }

        input:focus {
            outline: none;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
            border-color: var(--accent-blue);
        }

        .input-error {
            color: #b91c1c;
            font-size: 13px;
            margin-top: 8px;
        }

        .btn-primary {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            background: linear-gradient(180deg, var(--accent-red), #b24f32);
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(159, 11, 7, 0.12);
            transition: transform .12s ease, box-shadow .12s ease, opacity .12s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(159, 11, 7, 0.14);
            opacity: 0.98;
        }

        .alt {
            text-align: center;
            margin-top: 14px;
            color: var(--muted);
            font-size: 14px;
        }

        .alt a {
            color: var(--accent-red);
            text-decoration: none;
        }

        @media (max-width:520px) {
            .auth-card {
                padding: 22px;
                max-width: 94vw;
                border-radius: 12px;
            }

            .brand .logo {
                font-size: 30px;
            }

            .card-title h2 {
                font-size: 20px;
            }
        }
    </style>

    <section class="auth-page" aria-labelledby="forgot-heading">
        <div class="auth-card" role="region" aria-label="Forgot password form">
            <div class="brand">
                <div class="logo">
                    <img src="{{ asset('assets/imgs/logo.png') }}" style="width: 150px; margin-bottom: -40px; margin-top: -40px;" alt="">
                </div>
            </div>

            <div class="card-title">
                <h2 id="forgot-heading">Forgot your password?</h2>
                <p>No worries! Enter your email and we’ll send you a reset link.</p>
            </div>

            {{-- Session status --}}
            @if (session('status'))
                <div class="status" role="status">{{ session('status') }}</div>
            @endif

            {{-- Validation errors --}}
            @if ($errors->any())
                <div class="status" role="alert" style="background:#fff4f4;color:#7f1d1d;">
                    <strong>There were some problems with your input</strong>
                    <ul style="margin:8px 0 0 16px;">
                        @foreach ($errors->all() as $error)
                            <li style="font-size:13px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" novalidate>
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" />
                    @error('email')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary">Email Password Reset Link</button>
            </form>

            <div class="alt">
                Remember your password? <a href="{{ route('login') }}">Back to Login</a>
            </div>
        </div>
    </section>
@endsection
