<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Identifikasi;

class IdentifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Identifikasi = Identifikasi::All();
        return view('identifikasi.index', compact(['Identifikasi', $Identifikasi]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identifikasi.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $Identifikasi = new Identifikasi;
    
        $Identifikasi->hari_tanggal = $request->a;
        $Identifikasi->nama = $request->b;
        $Identifikasi->kelas = $request->c;
        $Identifikasi->jenis_masalah = $request->d;

        $Identifikasi->save();

        return redirect('identifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Identifikasi = Identifikasi::find($id);

        return view('identifikasi.detail')->with('Identifikasi', $Identifikasi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Identifikasi = Identifikasi::find($id);

        if(!$Identifikasi){
            abort(404);
        }

        return view('identifikasi.edit')->with('Identifikasi', $Identifikasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    

        $Identifikasi = Identifikasi::find($id);

        $Identifikasi->hari_tanggal = $request->a;
        $Identifikasi->nama = $request->b;
        $Identifikasi->kelas = $request->c;
        $Identifikasi->jenis_masalah = $request->d;

        $Identifikasi->save();

        return redirect('identifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Identifikasi = Identifikasi::find($id);
        $Identifikasi->delete();

        return redirect('identifikasi')->with('message', 'identifikasi sudah dihapus!');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Identifikasi::where('nama', 'LIKE', '%'. $query . '%')->paginate(1);

        return view('identifikasi.result', compact('hasil', 'query'));
    }
}
