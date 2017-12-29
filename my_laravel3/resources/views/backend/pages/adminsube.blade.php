@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">
  @if (Session::has('login_id') && Session::has('sirket_id'))

    <h1>Login id  :{{Session::get('login_id')}}</h1>
    <h1>Şirket id :{{Session::get('sirket_id')}}</h1>
  @endif

  {!!Html::linkRoute('urun_bilgi' , 'Urun ekle' ,array('class' =>'btn btn-danger btn-block'))!!}
  <br>

  <br>
  {!!Html::linkRoute('kategori_ekle' , 'Kategori ekle' ,array('class' =>'btn btn-danger btn-block'))!!}
  <br>
  {!!Html::linkRoute('marka_ekle' , 'Marka ekle' ,array('class' =>'btn btn-danger btn-block'))!!}

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
