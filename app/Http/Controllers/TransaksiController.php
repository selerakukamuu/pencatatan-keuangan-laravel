<?php

namespace App\Http\Controllers;;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksi', compact('data'));
    }

    public function store(Request $request)
    {
        Transaksi::create([
            'jenistransaksi' => $request->jenistransaksi,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        Transaksi::where('idtransaksi', $id)->delete();
        return redirect('/');
    }

    //EDIT
    public function edit($id)
    {
        $data = Transaksi::where('idtransaksi', $id)->first();
        return view('edit', compact('data'));
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        Transaksi::where('idtransaksi', $id)->update([
            'jenistransaksi' => $request->jenistransaksi,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/');
}
    }