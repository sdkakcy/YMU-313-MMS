<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sirket;
use App\login;
use App\sube;
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
        $sirket = new sirket();
        $sube = new sube();

        $kadi     = $request->kadi;
        $eposta = $request->eposta;
        $sifre  = $request->sifre;

        $giris=login::where(['kadi' =>$kadi ,'sifre' =>$sifre])->get();
        if(count($giris)>0)
        {
            echo 'doğru bilgi';
            Session::put('giris', $giris[0]->eposta);
            $e_posta=$giris[0]->eposta;
            /*session_start();
            session()->put('key', 'valueeee');
            $value = session()->pull('key', 'default');
            echo $value;*/
            //return redirect()->action('HomeController@sirket');
            //return redirect()->route('route.index');
            //return redirect()->route('route.index');
            if($giris[0]->yetki==1)
            {
                return redirect()->route('route.index');

            }else if($giris[0]->yetki==2)
            {
                $sirket_table=sirket::where(['eposta' =>$e_posta])->get();
                Session::put('login_id', $giris[0]->id);
                Session::put('sirket_id', $sirket_table[0]->id);
                return redirect()->action('HomeController@sirket');
            }
            else if($giris[0]->yetki==3)
            {
                $sube_table=sirket::where(['eposta' =>$e_posta])->get();
                Session::put('login_id', $giris[0]->id);
                Session::put('sube_id', $sube_table[0]->id);
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
