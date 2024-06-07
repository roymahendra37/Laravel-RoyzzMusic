<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/icon.png') }}"  />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music Admin - Dashboard</title>
    <tittle>@yield('title')</title>
    <style>
        .widget {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 250px;
            padding: 20px;
            box-sizing: border-box;
            margin: 10px;
            text-align: center;
            font-family: 'League Spartan', sans-serif;
        }
        .widget a{
            text-decoration: none;
            font-size: 15px;
            color: black;
            background-color: gray;
            border-radius: 5px;
            padding: 5px;
        }
        .widget a:hover{
            text-decoration: none;
            font-size: 15px;
            color: white;
            background-color: #0069e1;
            border-radius: 5px;
            padding: 5px;
        }
        .widget-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .widget h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .widget p {
            font-size: 30px;
            margin: 0;
        }
    </style>
</head>
<body background="{{ asset('assets/background.jpg') }}" style="background-size: 100%;">
    @include('partials.navbar')
    <div class="das-content">
        @yield('content')
    </div>
</body>
</html>
