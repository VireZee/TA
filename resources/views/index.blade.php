<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link  rel="stylesheet" href="{{ asset('/js/app.js') }}">
    <title>Non-Academic Digital Certificate Validator (SHA-512)</title>
</head>
<body>
    <header>
        <h1 id="head1">Non-Academic Digital Certificate Validator (SHA-512)</h1>
        <div class="auth">
            <button>Login</button>
            <button>Register</button>
        </div>
    </header>
    <div class="drag-area">
        <h2>Drag & drop your certificate here</h2>
        <span>OR</span>
        <button>Browse</button>
        <input type="file" hidden>
    </div>
</body>
</html>