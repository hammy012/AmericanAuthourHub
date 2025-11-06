@extends('layouts.app')

@section('title', 'American Author Hub | Verify Email')

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
            padding: 34px;
            box-sizing: border-box;
        }

        .brand {
            text-align: center;
            margin-bottom: 16px;
        }

        .brand .logo {
            font-size: 36px;
            color: var(--accent-red);
            letter-spacing: -0.6px;
            font-weight: normal;
        }

        .card-title {
            text-align: center;
            margin-bottom: 18px;
        }

        .card-title h2 {
            margin: 0;
            font-size: 22px;
            color: #0f172a;
            font-weight: normal;
        }

        .card-title p {
            margin: 6px 0 0;
            color: var(--muted);
            font-size: 14px;
            font-weight: normal;
        }

        .status {
            background: #f1f5f9;
            padding: 10px 12px;
            border-radius: 8px;
            color: #0f172a;
            font-size: 13px;
            margin-bottom: 12px;
            font-weight: normal;
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
            font-weight: normal;
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
            font-weight: normal;
        }

        .logout-btn {
            border: none;
            background: transparent;
            text-decoration: underline;
            color: #374151;
            font-size: 14px;
            cursor: pointer;
            font-weight: normal;
        }

        .logout-btn:hover {
            color: var(--accent-blue);
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

    <section class="auth-page" aria-labelledby="verify-heading">
        <div class="auth-card" role="region" aria-label="Email verification">
            <div class="brand">
                <div class="logo">American Author Hub</div>
            </div>

            <div class="card-title">
                <h2 id="verify-heading">Verify your email address</h2>
                <p>We’ve sent a verification link to your registered email.</p>
            </div>

            <p style="font-size:14px; color:#475569; margin-bottom:18px; text-align:center; font-weight:normal;">
                Before getting started, please verify your email address by clicking on the link we just emailed you.<br>
                If you didn’t receive it, we can send another one.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="status" role="status">
                    A new verification link has been sent to your email.
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom:12px;">
                @csrf
                <button type="submit" class="btn-primary">Resend Verification Email</button>
            </form>

            <form method="POST" action="{{ route('logout') }}" style="text-align:center;">
                @csrf
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </div>
    </section>
@endsection
