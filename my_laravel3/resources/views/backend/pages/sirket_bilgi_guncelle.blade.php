@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  <div class="row">
  			{!!Form::model($sirket, ['route' =>['route.update',$sirket->id], 'method' =>'PUT'])!!}
  			<div class="col-md-8">

  				{{Form::label('Ad:','')}}
  				{{Form::text('ad', null)}}
  				<br>
  				<br>
  				{{Form::label('Soyad:','')}}
  				{{Form::text('soyad',null)}}
  				<br>
  				<br>
  				{{Form::label('E-Posta:','')}}
  				{{Form::text('eposta',null)}}
  				<br>
  				<br>
  				{{Form::label('Şifre:','')}}
  				{{Form::text('sifre',null)}}
  				<br>
  				<br>
  				{{Form::label('Cep:','')}}
  				{{Form::text('cep',null)}}
  				<br>
  				<br>
  				{{Form::label('Tür:','')}}
  				{{Form::text('tur',null)}}
  				<br>
  				<br>
  				{{Form::label('Ticari Unvan:','')}}
  				{{Form::text('ticari_unvan',null)}}
  				<br>
  				<br>
  				{{Form::label('Vergi Dairesi:','')}}
  				{{Form::text('vergi_dairesi',null)}}
  				<br>
  				<br>
  				{{Form::label('TC:','')}}
  				{{Form::text('TC',null)}}
  				<br>
  				<br>
  				{{Form::label('Sabit Tel:','')}}
  				{{Form::text('sabit_tel',null)}}
  				<br>
  				<br>
  				{{Form::label('Sabit Tel-2:','')}}
  				{{Form::text('sabit_tel2',null)}}
  				<br>
  				<br>
  				{{Form::label('Konum Id:','')}}
  				{{Form::text('konum_id',null)}}
  				<br>

  			</div>
  			<div class="col-md-4">
  				<div class="well">
  					<dl class="dl-horizontal">
  						<dt>Creat At:</dt>
  						<dd>{{ date('M j, Y H:i' , strtotime($sirket->created_at))}}</dd>

  					</dl>
  					<dl class="dl-horizontal">
  						<dt>Last update:</dt>
  						<dd>{{date('M j, Y H:i' , strtotime($sirket->updated_at))}}</dd>

  					</dl>
  					<hr>
  					<div class="row">
  						<div class="col-sm-6">
  							{!!Html::linkRoute('route.index' , 'Cancel' , array($sirket->id),array('class' =>'btn btn-danger btn-block'))!!}

  						</div>
  						<div class="col-sm-6">
  							{{Form::submit('KAYDET' , ['class' =>'btn btn-danger btn-block'])}}

  						</div>

  					</div>

  				</div>
  			</div>
  			{!!Form::close()!!}
  		</div>
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
