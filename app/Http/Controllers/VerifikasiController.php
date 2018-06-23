<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Verifikasi;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Verifikasi = Verifikasi::All();
        return view('verifikasi.index', compact(['Verifikasi', $Verifikasi]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('verifikasi.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Verifikasi = new Verifikasi;
    
        $Verifikasi->tgl_verifikasi = $request->a;
        $Verifikasi->uraian = $request->b;
        $Verifikasi->hasil = $request->c;
        $Verifikasi->rekomendasi = $request->d;
        $Verifikasi->sasaran_mutu = $request->e;

        $Verifikasi->save();

        return redirect('verifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Verifikasi = Verifikasi::find($id);

        return view('verifikasi.detail')->with('Verifikasi', $Verifikasi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Verifikasi = Verifikasi::find($id);

        if(!$Verifikasi){
            abort(404);
        }

        return view('verifikasi.edit')->with('Verifikasi', $Verifikasi);
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
        $Verifikasi = Verifikasi::find($id);

        $Verifikasi->tgl_verifikasi = $request->a;
        $Verifikasi->uraian = $request->b;
        $Verifikasi->hasil = $request->c;
        $Verifikasi->rekomendasi = $request->d;
        $Verifikasi->sasaran_mutu = $request->e;

        $Verifikasi->save();

        return redirect('verifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Verifikasi = Verifikasi::find($id);
        $Verifikasi->delete();

        return redirect('verifikasi')->with('message', 'verifikasi sudah dihapus!');
    }
}
