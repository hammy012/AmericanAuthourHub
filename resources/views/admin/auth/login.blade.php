{{-- resources/views/admin/auth/login.blade.php --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login — Dashboard</title>

    <style>
        /* Colors inspired by the US flag */
        :root {
            --flag-red: #B22234;
            --flag-blue: #3C3B6E;
            --white: #ffffff;
            --muted: #f3f4f6;
            --card-shadow: 0 8px 30px rgba(19, 24, 44, 0.12);
            --glass: rgba(255, 255, 255, 0.06);
        }

        /* Reset & basic */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        html,
        body {
            height: 100%;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2f7 100%);
            color: #0f172a;
        }

        /* Page layout */
        .page-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
            background:
                radial-gradient(1200px 600px at 10% 10%, rgba(59, 59, 110, 0.06), transparent 8%),
                radial-gradient(1000px 500px at 90% 90%, rgba(178, 34, 52, 0.04), transparent 8%),
                linear-gradient(180deg, #fcfcfd 0%, #f1f5f9 100%);
        }

        /* Left accent (flag style) */
        .accent-bar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 48px;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .accent-bar .blue {
            background: var(--flag-blue);
            height: 40%;
        }

        .accent-bar .red {
            background: var(--flag-red);
            height: 60%;
        }

        /* Card */
        .card {
            width: 100%;
            max-width: 980px;
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 24px;
            align-items: center;
            padding: 32px;
            border-radius: 14px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.82));
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }

        /* Left panel (info) */
        .card .info {
            padding: 28px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
        }

        .brand .logo {
            width: 64px;
            height: 64px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--flag-blue), var(--flag-red));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 22px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
        }

        .brand h1 {
            font-size: 20px;
            color: #0f172a;
            letter-spacing: 0.2px;
        }

        .lead {
            margin-top: 8px;
            color: #475569;
            line-height: 1.5;
        }

        .features {
            margin-top: 26px;
            display: grid;
            gap: 12px;
        }

        .feature {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            background: var(--muted);
            padding: 12px;
            border-radius: 8px;
        }

        .dot {
            min-width: 40px;
            min-height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
        }

        .dot.blue {
            background: var(--flag-blue);
        }

        .dot.red {
            background: var(--flag-red);
        }

        /* Right panel (form) */
        .card .form-panel {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.92));
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.04);
        }

        .form-title {
            font-size: 22px;
            margin-bottom: 6px;
            color: #0f172a;
        }

        .form-sub {
            color: #64748b;
            margin-bottom: 18px;
            font-size: 14px;
        }

        form .field {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 13px;
            margin-bottom: 6px;
            color: #334155;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid #e6eef6;
            background: #fff;
            outline: none;
            transition: box-shadow .15s, border-color .15s;
        }

        input:focus {
            box-shadow: 0 4px 18px rgba(59, 59, 110, 0.06);
            border-color: var(--flag-blue);
        }

        .row {
            display: flex;
            gap: 12px;
            align-items: center;
            justify-content: space-between;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #475569;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .btn.login {
            background: linear-gradient(90deg, var(--flag-blue), var(--flag-red));
            color: var(--white);
            box-shadow: 0 8px 20px rgba(178, 34, 52, 0.12);
        }

        .btn.login:hover {
            transform: translateY(-1px);
        }

        .error {
            color: #b91c1c;
            font-size: 13px;
            margin-top: 6px;
        }

        .session-error {
            background: #fee2e2;
            color: #7f1d1d;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        /* Responsive */
        @media (max-width:900px) {
            .card {
                grid-template-columns: 1fr;
                padding: 20px;
            }

            .accent-bar {
                width: 38px;
            }
        }

        @media (max-width:420px) {
            .card {
                padding: 16px;
                gap: 14px;
            }

            .brand h1 {
                font-size: 18px;
            }

            .brand .logo {
                width: 56px;
                height: 56px;
                font-size: 18px;
            }
        }

        /* small breathing animation for button */
        @keyframes ani-breath {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            50% {
                opacity: 0.9;
                transform: translateY(-2px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn.login {
            animation: ani-breath 3s ease-in-out infinite;
        }
    </style>
</head>

<body>
    <div class="accent-bar" aria-hidden="true">
        <div class="blue"></div>
        <div class="red"></div>
    </div>

    <div class="page-wrap">
        <div class="card" role="main" aria-labelledby="login-heading">

            <div class="info" aria-hidden="false">
                <div class="brand">
                    <img style="width: 60px" src="{{ asset('assets/imgs/logo.png') }}" alt="">
                    <div>
                        <h1 id="login-heading">Ameran Author Hub - Admin Panel</h1>
                        <div class="lead">
                            Secure area — for authorized administrators only.
                            Once logged in, you’ll have access to the full dashboard and management tools.
                        </div>
                    </div>
                </div>

                <div class="features">
                    <div class="feature">
                        <div class="dot blue">A</div>
                        <div>
                            <div style="font-weight:700;color:#0f172a">Fast Access</div>
                            <div style="color:#64748b;font-size:13px">
                                Admin accounts are seeded — manual registration is disabled.
                            </div>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="dot red">S</div>
                        <div>
                            <div style="font-weight:700;color:#0f172a">Secure</div>
                            <div style="color:#64748b;font-size:13px">
                                Encrypted passwords and guard-protected routes ensure full data safety.
                            </div>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="dot blue">U</div>
                        <div>
                            <div style="font-weight:700;color:#0f172a">Unified</div>
                            <div style="color:#64748b;font-size:13px">
                                Breeze-inspired forms integrated with a custom admin guard.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-panel" aria-live="polite">
                <div class="form-title">Welcome back, Admin</div>
                <div class="form-sub">Enter your email and password to access the admin dashboard.</div>

                {{-- Session / validation errors --}}
                @if (session('status'))
                    <div class="session-error">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="session-error">Invalid credentials — please check and try again.</div>
                @endif

                <form method="POST" action="{{ route('admin.login.store') }}" novalidate>
                    @csrf

                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required
                            autocomplete="username" />
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" required
                            autocomplete="current-password" />
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row" style="margin-top:8px;">
                        <label class="remember">
                            <input type="checkbox" name="remember" style="width:16px;height:16px;border-radius:4px;">
                            Remember me
                        </label>

                        <div style="font-size:13px;color:#64748b">
                            {{-- Optional forgot password link --}}
                            {{-- <a href="#" style="color:var(--flag-blue);text-decoration:none;">Forgot?</a> --}}
                        </div>
                    </div>

                    <div style="margin-top:18px; display:flex; gap:10px; align-items:center;">
                        <button type="submit" class="btn login">Login</button>
                    </div>
                </form>

                <div style="margin-top:18px;color:#94a3b8;font-size:13px">
                    © {{ date('Y') }} American author hub all rights reserved.
                </div>
            </div>
        </div>
    </div>

</body>

</html>
