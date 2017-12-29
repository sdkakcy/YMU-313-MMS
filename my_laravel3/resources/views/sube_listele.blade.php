<div class="row">
			<div class="col-md-10">

				<h1> all post</h1>
			</div>
			<div class="row">
				<div class="col-md-2">
					<a href="" class="btn btn-lg btn-block primary">Create New Post</a>
					<a href="/sirket_anasayfa" class="btn btn-lg btn-block primary">Cancel</a>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<thead>

								<th>#</th>
								<th>ŞUBE KODU</th>
								<th>ŞUBE ADI</th>
								<th>E-POSTA</th>
								<th>KONUM ID</th>
								<th>ŞİRKET ID</th>
								<th>Created At</th>
								<th>Update At</th>
								<th></th>
								<th></th>

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
						<div class="text-center">

						</div>

					</div>

				</div>

			</div>

		</div>
