@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  @if (Session::has('login_id') && Session::has('sirket_id'))

  	<h1>Login id  :{{Session::get('login_id')}}</h1>
  	<h1>Şirket id :{{Session::get('sirket_id')}}</h1>
  @endif
  {!! Form::open(['route' => 'sube.store']) !!}

  {{Form::label('sube_kodu:','')}}
  {{Form::text('sube_kodu','')}}
  <br>
  <br>
  {{Form::label('sube_adi:','')}}
  {{Form::text('sube_adi','')}}
  <br>
  <br>
  {{Form::label('Kullanıcı Adı:','')}}
  {{Form::text('kadi','')}}
  <br>
  <br>
  {{Form::label('E-posta:','')}}
  {{Form::text('eposta','')}}
  <br>
  <br>
  {{Form::label('sifre:','')}}
  {{Form::text('sifre','')}}
  <br>
  <br>
  {{Form::label('konum_id:','')}}
  {{Form::text('konum_id','')}}
  <br>

  {{Form::submit('KAYDET')}}


  {!! Form::close() !!}
        <!-- footer content -->

        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
  @stop
