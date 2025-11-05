{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')

@section('title', 'Ebook | Login')

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
            /* header/footer space */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
            background: #fbfdff;
            /* very light neutral bg, no heavy gradient */
        }

        /* Card: more solid, prominent shadow, subtle border */
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
            /* slightly bigger */
            font-weight: 900;
            color: var(--accent-red);
            letter-spacing: -0.6px;
        }

        .brand .tag {
            font-size: 14px;
            color: var(--accent-red);
            font-weight: 700;
            margin-top: 6px;
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

        /* larger */
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

        .form-group {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #374151;
            font-weight: 700;
            margin-bottom: 8px;
        }

        /* larger label */
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 13px 14px;
            border-radius: 10px;
            border: 1px solid #e8eaf0;
            /* subtle border */
            font-size: 15px;
            /* larger input font */
            box-sizing: border-box;
            background: #fbfdff;
        }

        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
            border-color: var(--accent-blue);
        }

        .input-error {
            color: #b91c1c;
            font-size: 13px;
            margin-top: 8px;
        }

        .meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #374151;
            font-size: 14px;
        }

        .forgot a {
            color: var(--accent-blue);
            font-weight: 700;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        /* Primary button: solid color, subtle hover, minimal gradient removed */
        .btn-primary {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            background: linear-gradient(180deg, var(--accent-red), #b24f32);
            /* minimal, subtle */
            color: #fff;
            border: none;
            font-weight: 900;
            font-size: 16px;
            /* slightly larger */
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
            font-weight: 800;
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

    <section class="auth-page" aria-labelledby="login-heading">
        <div class="auth-card" role="region" aria-label="Login form">
            <div class="brand" aria-hidden="false">
                <div class="logo">Ebook</div>
            </div>

            <div class="card-title">
                <h2 id="login-heading">Welcome back</h2>
                <p>Sign in to your Ebook account</p>
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

            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" />
                    @error('email')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password" />
                    @error('password')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="meta">
                    <label class="remember">
                        <input id="remember_me" name="remember" type="checkbox"
                            style="width:16px;height:16px;border-radius:4px;margin:0;">
                        <span style="margin-left:6px;font-weight:700;">Remember me</span>
                    </label>

                    <div class="forgot">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        @endif
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn-primary">Log in</button>
                </div>
            </form>

            <div class="alt">
                Dont have an account? <a href="{{ route('register') }}">Create one</a>
            </div>
        </div>
    </section>
@endsection
