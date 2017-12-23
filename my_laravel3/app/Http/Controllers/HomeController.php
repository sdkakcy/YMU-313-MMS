<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sirket;
use App\login;
use Session;

class HomeController extends Controller
{
    function get_kayit()
    {
        return view('kayit');
    }

    function get_login()
    {
        return view('index');
    }
    function sirket()
    {
        return view('sirket_anasayfa');
    }

    function post_login(Request $request)
    {
        $login = new login();

        $ad     = $request->ad;
        $eposta = $request->eposta;
        $sifre  = $request->sifre;

        $giris=login::where(['ad' =>$ad ,'sifre' =>$sifre])->get();
        if(count($giris)>0)
        {
            echo 'doğru bilgi';

            //return redirect()->action('HomeController@sirket');
            //return redirect()->route('route.index');
            //return redirect()->route('route.index');
            if($giris[0]->yetki==1)
            {
                return redirect()->route('route.index');
            }else if($giris[0]->yetki==2){
                return redirect()->action('HomeController@sirket');
            }
        }
        else
        {
            echo 'yanlış bilgi';
            return view('index');
        }

        //return redirect()->route('route.index');
        //return view('kayit');
    }

}
