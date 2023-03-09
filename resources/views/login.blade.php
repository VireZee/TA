<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="bg">
        <a href="main" class="back-button">&#8592; Back</a>
        <form action="{{ route('login') }}" method="POST" id="auth">
            @csrf
            @error('email')
                <div class="form-field">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            @error('password')
                <div class="form-field">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <div class="form-field" id="e">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="form-field" id="p">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="form-field">
                <button class="btn" type="submit">Log In</button>
            </div>
            <div class="form-field">
                <p>Not registered yet? <a href="register">Register</a></p>
            </div>
            <div class="form-field">
                <p><a href="forgot-password" style="color: #f00">Forgot Password</a></p>
            </div>
        </form>
    </div>
</body>
</html>