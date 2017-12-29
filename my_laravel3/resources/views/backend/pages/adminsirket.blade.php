@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  {!!Html::linkRoute('sube.create' , 'Şube Oluştur' ,array('class' =>'btn btn-danger btn-block'))!!}
  <br>

  <br>
  {!!Html::linkRoute('sube.index' , 'Şube Listele' ,array('class' =>'btn btn-danger btn-block'))!!}

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
