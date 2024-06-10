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
    <div class="gear-content">
		<h3>Reservasi</h3>
    <button type="button" class="btn btn-tambah" style="margin-bottom: 20px;">
      <a href="/reservasi/cetak">Cetak</a>
    </button>
		<table class="table-data">
		   <thead>
			<tr>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Nama</th>
                <th>Jenis Paket</th>
                <th>Durasi</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
		   </thead>
		   <tbody>
        @forelse ($reservasis as $reservasi)
        <tr>
          <td>{{ $reservasi->tanggal }}</td>
          <td>{{ substr($reservasi->jam, 0, 5) }}</td>
          <td>{{ $reservasi->durasi }} Jam</td>
          <td>{{ $reservasi->nama }}</td>
          <td>{{ $reservasi->paket }}</td>
          <td>Rp. {{ number_format($reservasi->total) }}</td>
          <td style="padding: 20px;">
            <a class='btn-delete' href="/reservasi/hapus/{{ $reservasi->id_reservasis }}">Hapus</a>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" align="center">Data Reservasi Kosong</td>
        </tr>
        @endforelse
      </tbody>
		</table>
</body>
</html>