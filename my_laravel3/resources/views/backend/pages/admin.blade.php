@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel">
      <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4 class="panel-title">Collapsible Group Items #1</h4>
      </a>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="col-md-2">
  					<a href="{{ route('route.create') }}" class="btn btn-lg btn-block primary">Şirket Ekle</a>
  					<a href="{{ route('route.index') }}" class="btn btn-lg btn-block primary">Cancel</a>
  				</div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
								<th>AD</th>
								<th>SOYAD</th>
								<th>E-POSTA</th>
								<th>CEP NO</th>
								<th>TUR</th>
								<th>TİCARİ UNVAN</th>
								<th>VERGİ DAİRESİ</th>
								<th>TC</th>
								<th>SABİT TEL</th>
								<th>SABİT TEL2</th>
								<th>KONUM ID</th>
								<th>Created At</th>
								<th>Update At</th>
								<th></th>
								<th></th>

            </thead>
            <tbody>
              @foreach($sirket as $satir)
                <tr>
                  <th>{{$satir->id}}</th>
                  <th>{{$satir->ad}}</th>
                  <th>{{$satir->soyad}}</th>
                  <th>{{$satir->eposta}}</th>
                  <th>{{$satir->cep}}</th>
                  <th>{{$satir->tur}}</th>
                  <th>{{$satir->ticari_unvan}}</th>
                  <th>{{$satir->vergi_dairesi}}</th>
                  <th>{{$satir->TC}}</th>
                  <th>{{$satir->sabit_tel}}</th>
                  <th>{{$satir->sabit_tel2}}</th>
                  <th>{{$satir->konum_id}}</th>
                  <th>{{date('M j, Y H:i' , strtotime($satir->created_at))}}</th>
                  <th>{{date('M j, Y H:i' , strtotime($satir->updated_at))}}</th>
                  <th><a href="{{route ('route.edit' , $satir->id)}}" class="btn btn-dafault btn-sm">Edit</a></th>
                  <th>
                    {!! Form::open(['route' =>['route.destroy',$satir->id] , 'method' =>'DELETE'])!!}
                    {{Form::submit('SİL' , ['class' =>'btn btn-danger btn-block'])}}
                    {!!Form::close()!!}
                  </th>


                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- end of accordion -->
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
