<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sirket;
use App\login;
use Session;

class sirketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sirket = sirket::all();
        return view('listele')->with('sirket',$sirket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kayit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sirket = new sirket();
        $login = new login();

        //şirket tablosu
        $sirket->ad            = $request->ad;
        $sirket->soyad         = $request->soyad;
        $sirket->eposta        = $request->eposta;
        $sirket->sifre         = $request->sifre;
        $sirket->cep           = $request->cep;
        $sirket->tur           = $request->tur;
        $sirket->ticari_unvan  = $request->ticari_unvan;
        $sirket->vergi_dairesi = $request->vergi_daires;
        $sirket->TC            = $request->TC;
        $sirket->sabit_tel     = $request->sabit_tel;
        $sirket->sabit_tel2    = $request->sabit_tel2;
        $sirket->konum_id      = $request->konum_id;

        //login tablosu
        $login->ad            = $request->ad;
        $login->eposta        = $request->eposta;
        $login->sifre         = $request->sifre;
        $login->yetki         = 2;

        //şirket tablosuna kaydet
        $sirket->save();
        //login tablosuna kaydet
        $login->save();

        return redirect()->route('route.index');
        //return redirect()->route('route.show' , $sirket->id);
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
        $sirket =sirket::find($id);
        return view('sirket_bilgi_guncelle')->with('sirket',$sirket);
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
        $sirket =sirket::find($id);

        
        $sirket->ad            = $request->ad;
        $sirket->soyad         = $request->soyad;
        $sirket->eposta        = $request->eposta;
        $sirket->sifre         = $request->sifre;
        $sirket->cep           = $request->cep;
        $sirket->tur           = $request->tur;
        $sirket->ticari_unvan  = $request->ticari_unvan;
        $sirket->vergi_dairesi = $request->vergi_daires;
        $sirket->TC            = $request->TC;
        $sirket->sabit_tel     = $request->sabit_tel;
        $sirket->sabit_tel2    = $request->sabit_tel2;
        $sirket->konum_id      = $request->konum_id;

        $sirket ->save();
        return redirect()->route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sirket =sirket::find($id);
        $sirket->delete();
        return redirect()->route('route.index');
    }
}
