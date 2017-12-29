@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  @if (Session::has('login_id') && Session::has('sube_id'))

    <h1>Login id  :{{Session::get('login_id')}}</h1>
    <h1>Sube id :{{Session::get('sube_id')}}</h1>
  @endif






                    {!! Form::open(['route' => 'kategori_post', 'class'=>'form-horizontal form-label-left']) !!}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Üst Kategori <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name ="ust_kategori_id">
                            <option value="0">Bu bir üst kategoridir</option>
                            @foreach ($kat as $kategori)
                              <option value="{{$kategori->id}}">{{$kategori->kategori_adi}}</option>

                             @endforeach
                          </select>

                      </div>
                    </div>

                    {{Form::text('kategori_adi','',['placeholder'=>'Kategori Adi Gir','class'=>'form-control col-md-7 col-xs-12'])}}


                    <div class="ln_solid"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        {{Form::submit('KAYDET'), ['class' =>'btn btn-success']}}
                      </div>

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
