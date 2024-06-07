<div class="navcontainer">
    <nav class="wrapper">
        <div class="brand">
            <div class="name">Royzz Music (Admin) </div>
        </div>
        <ul class="navigation">
            <li><a href="#">Dashboard</a></li>
            <li><a href="/gear" class="{{ request()->Is('gear*') ? 'active' : '' }}">
                Gear</a></li>
            <li><a href="/reservasi" class="{{ request()->Is('reservasi*') ? 'active' : '' }}">
                Reservasi</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </nav>
</div>