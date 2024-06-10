<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="{{ asset('assets/icon.png') }}"  />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music - Login</title>
</head>
    
<body background="{{ asset('assets/background.jpg') }}">
    <div class="navcontainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="name">Royzz Music</div>
            </div>
            <ul class="navigation">
                <li><a href="/">Home</a></li>
                <li><a href="/sesi">Login</a></li>
                <li><a href="/sesi/register">Register</a></li>
            </ul>
        </nav>
    </div>
    
    <form class="hallogin" action="/sesi/login" method="post" enctype="multipart/form-data">
        @csrf
        <div class="hlogin">
            <p>Login</p>
            <label>Email</label>
            <input class="input" type="text" id="username" name="email"/>
            <label>Password</label>
            <input class="input" type="password" id="password" name="password"/>
            <button type="submit" name="login">Login</button>
            <label>Belum memiliki akun?</label>
            <a href="/sesi/register">Register</a>
        </div> 
    </form>
</body>
</html>