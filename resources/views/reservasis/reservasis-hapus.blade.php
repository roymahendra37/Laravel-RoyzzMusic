<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/icon.png') }}"  />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music Admin - Reservasi</title>
</head>
<body>
    <div class="fcontainer">
        <div class="navcontainer">
            <nav class="wrapper">
                <div class="brand">
                    <div class="name">Royzz Music (Admin) </div>
                </div>
                <ul class="navigation">
                    <li><a href="/admin">
                        Dashboard</a></li>
                    <li><a href="/gear">
                        Gear</a></li>
                    <li><a href="/reservasi">
                        Reservasi</a></li>
                    <li><a href="/sesi/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <form class="halreservasi-entry">
        <div class="hreservasi-entry">
        <h2 style="margin-bottom: -100px;">Ingin Menghapus Data ?</h2>
            <a href={{ url('/reservasi/destroy/' . $reservasi->id_reservasis ) }} class="btn" style="margin-top: -200px; text-decoration: none;">
              Yes
            </a>
            <a href="/reservasi" class="btn" style="margin-top: -300px; text-decoration: none;">
              No
            </a>              
        </div> 
    </form>
</body>
</html>
  