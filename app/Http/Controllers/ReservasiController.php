<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::all();
        return view('reservasis.reservasis', compact('reservasis'));
    }

    public function store(Request $request)
    {
       $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'durasi' => 'required',
            'nama' => 'required',
            'paket' => 'required',
        ]);

        if ($request->paket == 'Paket 1'){
            $total = 25000*$request->durasi;
        } elseif ($request->paket == 'Paket 2'){
            $total = 35000*$request->durasi;
        } else{
            $total = 50000*$request->durasi;
        }

        Reservasi::create([
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'durasi' => $request->durasi,
            'nama' => $request->nama,
            'paket' => $request->paket,
            'total' => $total,
        ]);

        return redirect('/');
    }

    public function delete($id_reservasis)
    {
        $reservasi = Reservasi::find($id_reservasis);
        return view('reservasis.reservasis-hapus', compact('reservasi'));
    }

    public function destroy($id_reservasis)
    {
        $reservasi = Reservasi::find($id_reservasis);
        $reservasi->delete();
        return redirect('/reservasi');
    }

    public function cetak()
    {
        $reservasis = Reservasi::all();
        $pdf = Pdf::loadview('reservasis.reservasis-cetak', compact('reservasis'));
        return $pdf->download('rekap-reservasi.pdf');
    }
}
