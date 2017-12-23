<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sube;
use App\login;
use Session;

class SubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sube = sube::all();
        return view('sube_listele')->with('sube',$sube);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sube_kayit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sube = new sube();
        $login = new login();

        //şube tablosu
        $sube->sube_kodu     = $request->sube_kodu;
        $sube->sube_adi      = $request->sube_adi;
        $sube->eposta         = $request->eposta;
        $sube->konum_id      = $request->konum_id;

        //login tablosu
        $login->kadi            = $request->kadi;
        $login->eposta            = $request->eposta;
        $login->sifre         = $request->sifre;
        $login->yetki         = 3; 

        //şirket tablosuna kaydet
        $sube->save();
        //login tablosuna kaydet
        $login->save();

        return redirect()->route('sube.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sube =sube::find($id);

        return view('sube_bilgi_guncelle')->with('sube',$sube);
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
        $sube =sube::find($id);

        
        $sube->sube_kodu    = $request->sube_kodu;
        $sube->sube_adi     = $request->sube_adi;
        $sube->sifre        = $request->sifre;
        $sube->konum_id     = $request->konum_id;

        $sube ->save();
        return redirect()->route('sube.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sube =sube::find($id);
        $sube->delete();
        return redirect()->route('sube.index');
    }
}
