<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{
    public function index()
    {
        $gears = Gear::all();
        return view('gears.gears', compact('gears'));
    }

    public function create()
    {
        return view('gears.gears-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'jenis' => 'required',
            'tipe' => 'required',
            'merk' => 'required',
            'harga' => 'required',
        ]);

        Gear::create([
            'jenis' => $request->jenis,
            'tipe' => $request->tipe,
            'merk' => $request->merk,
            'harga' => $request->harga,
        ]);

        return redirect('/gear');
    }

    public function edit($id_gears)
    {
        $gear = Gear::find($id_gears);
        return view('gears.gears-edit', compact('gear'));
    }

    public function update(Request $request, $id_gears)
    {
        $request->validate([
            'jenis' => 'required',
            'tipe' => 'required',
            'merk' => 'required',
            'harga' => 'required',
        ]);

        $gear = Gear::find($id_gears);

        $gear->update([
            'jenis' => $request->jenis,
            'tipe' => $request->tipe,
            'merk' => $request->merk,
            'harga' => $request->harga,
        ]);

        return redirect('/gear');
    }

    public function delete($id_gears)
    {
        $gear = Gear::find($id_gears);
        return view('gears.gears-hapus', compact('gear'));
    }

    public function destroy($id_gears)
    {
        $gear = Gear::find($id_gears);
        $gear->delete();
        return redirect('/gear');
    }

}
