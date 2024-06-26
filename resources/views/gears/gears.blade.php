<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="{{ asset('assets/icon.png') }}"  />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
  <title>Royzz Music Admin - Gear</title>
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
		<h3>Gear</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="/gear/tambah">Tambah Data</a>
		</button>
    <button type="button" class="btn btn-tambah" style="margin-bottom: 20px;">
      <a href="/gear/cetak">Cetak</a>
    </button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%;">Jenis Gear</th>
			  <th style="width: 20%;">Tipe</th>
			  <th style="width: 20%;">Merk</th>
			  <th>Harga</th>
			  <th style="width: 20%;">Action</th>
			</tr>
		   </thead>
		   <tbody>
        @forelse ($gears as $gear)
        <tr>
          <td>{{ $gear->jenis }}</td>
          <td>{{ $gear->tipe }}</td>
          <td>{{ $gear->merk }}</td>
          <td>Rp. {{ number_format($gear->harga) }}</td>
          <td style="padding: 20px;">
            <a class='btn-edit' href="/gear/edit/{{ $gear->id_gears }}">Edit</a>
            <a class='btn-delete' href="/gear/hapus/{{ $gear->id_gears }}">Hapus</a>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" align="center">Data Gear Kosong</td>
        </tr>
        @endforelse
      </tbody>
		</table>
</body>
</html>