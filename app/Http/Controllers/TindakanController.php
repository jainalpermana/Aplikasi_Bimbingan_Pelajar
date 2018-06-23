<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tindakan;
use App\Identifikasi;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tindakan = Tindakan::All();
        $Identifikasi = Identifikasi::All();

        return view('tindakan.index', compact(['Identifikasi', $Identifikasi], ['Tindakan', $Tindakan]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Tindakan = Tindakan::All();
        $Identifikasi = Identifikasi::All();

        return view('tindakan.index', compact(['Identifikasi', $Identifikasi], ['Tindakan', $Tindakan]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tindakan = new Tindakan;
        
        $Tindakan->identifikasi_id = $request->a;
        $Tindakan->tindakan = $request->b;
        $Tindakan->hasil = $request->c;

        $Tindakan->save();

        return redirect('tindakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Tindakan = Tindakan::find($id);

        return view('tindakan.detail')->with('Tindakan', $Tindakan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tindakan = Tindakan::find($id);
        $Identifikasi = Identifikasi::All();

        if(!$Tindakan){
            abort(404);
        }

        return view('tindakan.edit', compact(['Tindakan',$Tindakan],['Identifikasi',$Identifikasi]));
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
        $Tindakan = Tindakan::find($id);

        $Tindakan->identifikasi_id = $request->a;
        $Tindakan->tindakan = $request->b;
        $Tindakan->hasil = $request->c;
        
        $Tindakan->save();

        return redirect('tindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tindakan = Tindakan::find($id);
        $Tindakan->delete();

        return redirect('tindakan')->with('message', 'tindakan sudah dihapus!');
    }
}
