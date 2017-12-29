@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  @if (Session::has('login_id') && Session::has('sube_id'))

    <h1>Login id  :{{Session::get('login_id')}}</h1>
    <h1>Sube id :{{Session::get('sube_id')}}</h1>
  @endif
  {!! Form::open(['route' => 'urun.store', 'class'=>'form-horizontal form-label-left']) !!}

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Adı <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" name ="kategori_id">

          @foreach ($kat as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->kategori_adi}}</option>

           @endforeach
        </select>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marka Adı <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" name ="marka_id">

          @foreach ($mar as $marka)
            <option value="{{$marka->id}}">{{$marka->marka_adi}}</option>

           @endforeach
        </select>

    </div>
  </div>

  {{Form::text('urun_barkod','', ['class' => 'form-control','placeholder'=>'Barkod Numarası'])}}
  {{Form::text('urun_adi','', ['class' => 'form-control','placeholder'=>'Urun adi'])}}
  {{Form::text('urun_agirligi','', ['class' => 'form-control','placeholder'=>'Urun Agirligi'])}}
  {{Form::text('urun_adet','', ['class' => 'form-control','placeholder'=>'Urun adeti'])}}
  {{Form::text('urun_fiyat','', ['class' => 'form-control','placeholder'=>'Urun fiyati'])}}


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
