<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login · Rigid Boxes</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        :root {
            --primary: #8d4445;
            --primary-dark: #633032;
            --sidebar: #251d21;
            --accent: #c16a6b;
            --soft: #f8eeec;
            --bg: #1e171a;
            --card: #ffffff;
            --text: #252329;
            --muted: #77737c;
            --line: #ebe8ec;
            --shadow: 0 1.25rem 2.5rem rgba(0, 0, 0, 0.25);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: radial-gradient(circle at 50% 30%, #34272d 0%, #191215 100%);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.25rem;
        }

        .login-wrapper {
            width: 100%;
            max-width: 27.5rem;
            perspective: 62.5rem;
        }

        .login-card {
            background: var(--card);
            border-radius: 1.25rem;
            padding: 2.5rem 2.25rem;
            box-shadow: var(--shadow);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .login-header {
            text-align: center;
            margin-bottom: 1.875rem;
        }

        .brand-logo {
            width: 4.5rem;
            height: 4.5rem;
            object-fit: contain;
            margin-bottom: 0.875rem;
            filter: drop-shadow(0 0.25rem 0.625rem rgba(0,0,0,0.15));
        }

        .login-header h1 {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text);
            letter-spacing: -0.02em;
        }

        .login-header p {
            color: var(--muted);
            font-size: 0.8125rem;
            margin-top: 0.375rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 700;
            color: #3b3740;
            margin-bottom: 0.5rem;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i.prefix-icon {
            position: absolute;
            left: 0.875rem;
            color: #9c8d94;
            font-size: 0.9375rem;
            transition: color 0.2s ease;
        }

        .input-wrapper input {
            width: 100%;
            padding: 0.8125rem 0.875rem 0.8125rem 2.625rem;
            border: 0.0938rem solid #e2dde4;
            border-radius: 0.75rem;
            font-size: 0.875rem;
            font-family: 'DM Sans', sans-serif;
            background: #faf9fb;
            color: var(--text);
            outline: none;
            transition: all 0.2s ease;
        }

        .input-wrapper input:focus {
            background: #fff;
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(141, 68, 69, 0.12);
        }

        .input-wrapper input:focus + i.prefix-icon {
            color: var(--primary);
        }

        .toggle-password {
            position: absolute;
            right: 0.875rem;
            background: none;
            border: none;
            color: var(--muted);
            cursor: pointer;
            font-size: 0.875rem;
            padding: 0.25rem;
        }

        .toggle-password:hover {
            color: var(--text);
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            font-size: 0.8125rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--muted);
            cursor: pointer;
            font-weight: 500;
        }

        .remember-me input {
            accent-color: var(--primary);
            width: 1rem;
            height: 1rem;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: #fff;
            border: none;
            border-radius: 0.75rem;
            font-size: 0.9375rem;
            font-weight: 700;
            font-family: 'DM Sans', sans-serif;
            cursor: pointer;
            box-shadow: 0 0.5rem 1.25rem rgba(141, 68, 69, 0.35);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.625rem;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 0.625rem 1.5rem rgba(141, 68, 69, 0.45);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .alert {
            padding: 0.75rem 1rem;
            border-radius: 0.625rem;
            font-size: 0.8125rem;
            margin-bottom: 1.375rem;
            display: flex;
            align-items: center;
            gap: 0.625rem;
            line-height: 1.4;
        }

        .alert-danger {
            background: #fff0f0;
            color: #a52b2b;
            border: 1px solid #f7d1d1;
        }

        .alert-success {
            background: #eaf8ef;
            color: #287a45;
            border: 1px solid #c9eee0;
        }

        .alert-info {
            background: var(--soft);
            color: var(--primary);
            border: 1px solid #f0dddd;
        }

        .credentials-hint {
            margin-top: 1.5rem;
            padding: 0.875rem;
            background: #fbf9fa;
            border: 1px dashed #e7dbde;
            border-radius: 0.75rem;
            text-align: center;
            font-size: 0.75rem;
            color: var(--muted);
        }

        .credentials-hint strong {
            color: var(--primary);
            user-select: all;
        }

        .footer-copy {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <img src="{{ asset('images/The Rigid Boxes Logo 1.png') }}" alt="Rigid Boxes Logo" class="brand-logo">
            <h1>Admin Portal</h1>
            <p>Sign in to manage Rigid Boxes website content</p>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-check"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Admin Email</label>
                <div class="input-wrapper">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter admin email" required autofocus>
                    <i class="fa-solid fa-envelope prefix-icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                    <i class="fa-solid fa-lock prefix-icon"></i>
                    <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fa-regular fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" checked>
                    <span>Remember me</span>
                </label>
            </div>

            <button type="submit" class="btn-submit">
                <span>Sign In to Dashboard</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>


    </div>

    <div class="footer-copy">
        &copy; {{ date('Y') }} Rigid Boxes Administration System.
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }
</script>

</body>
</html>
