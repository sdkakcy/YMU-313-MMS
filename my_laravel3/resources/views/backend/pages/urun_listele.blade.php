@extends('backend.layout.app')
@section('content')
<div class="right_col" role="main">

  <!-- start accordion -->
                   <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel">
                       <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <h4 class="panel-title">Collapsible Group Items #1</h4>
                       </a>
                       <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                           <table class="table table-bordered">
                             <thead>
                               <tr>
                                 <th>#</th>
                                 <th>ŞUBE KODU</th>
                 								<th>ŞUBE ADI</th>
                 								<th>E-POSTA</th>
                 								<th>KONUM ID</th>
                 								<th>ŞİRKET ID</th>
                 								<th>Created At</th>
                 								<th>Update At</th>
                               </tr>
                             </thead>
                             <tbody>
                               @foreach($sube as $satir)
               									<tr>
               										<th>{{$satir->id}}</th>
               										<th>{{$satir->sube_kodu}}</th>
               										<th>{{$satir->sube_adi}}</th>
               										<th>{{$satir->eposta}}</th>
               										<th>{{$satir->konum_id}}</th>
               										<th>{{$satir->sirket_id}}</th>
               										<th>{{date('M j, Y H:i' , strtotime($satir->created_at))}}</th>
               										<th>{{date('M j, Y H:i' , strtotime($satir->updated_at))}}</th>
               										<th><a href="{{route ('sube.edit' , $satir->id)}}" class="btn btn-dafault btn-sm">Edit</a></th>
               										<th>
               											{!! Form::open(['route' =>['sube.destroy',$satir->id] , 'method' =>'DELETE'])!!}
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
