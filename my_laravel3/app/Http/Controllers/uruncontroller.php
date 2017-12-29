<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\urun;
use App\kategori;
use App\marka;
use App\urun_kontrol;


use Session;

class uruncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function get_kategoriler()
     {
       $kategori = kategori::all();
       return view('backend.pages.sube_kategori_ekle')->with('kat',$kategori);

     }
     public function post_kategoriler(Request $request)
     {
       $kategori = new kategori();
       $kategori->kategori_adi      = $request->kategori_adi;
       $kategori->ebeveyn_id        = $request->ust_kategori_id;

       $kategori->save();
       return redirect()->route('urun.index');


     }

     public function get_markalar()
     {
       $kategori = kategori::all();
       return view('backend.pages.sube_marka_ekle')->with('kat',$kategori);

     }
     public function post_markalar(Request $request)
     {
       $marka = new marka();
       $marka->marka_adi      = $request->marka_adi;
       $marka->kategori_id        = $request->kategori_id;

       $marka->save();
       return redirect()->route('urun.index');


     }
     public function get_urun_bilgiler()
     {
       $kategori = kategori::all();
       $marka = marka::all();



       return view('backend.pages.sube_urun_ekle')->with('kat',$kategori)->with('mar',$marka);


     }


    public function index()
    {

        return view('backend.pages.adminsube');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $urun = new urun();
      $urun_kontrol = new urun_kontrol();

      $urun->urun_barkod            = $request->urun_barkod;
      $urun->urun_adi         = $request->urun_adi;
      $urun->urun_agirligi        = $request->urun_agirligi;
      $urun->urun_adet           = $request->urun_adet;
      $urun->marka_id           = $request->marka_id;


      $urun_kontrol->urun_barcod            = $request->urun_barkod;
      $urun_kontrol->urun_fiyat         = $request->urun_fiyat;
      $urun_kontrol->sube_id        = Session::get('sube_id');
    //  $urun_kontrol->urun_id           = $request->urun_id;

      $urun->save();
      $urun_kontrol->save();

      return redirect()->route('urun.index');



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
