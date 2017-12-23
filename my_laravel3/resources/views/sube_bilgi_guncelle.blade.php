<div class="row">
			{!!Form::model($sube, ['route' =>['sube.update',$sube->id], 'method' =>'PUT'])!!}
			<div class="col-md-8">

				{{Form::label('Şube Kodu:','')}}
				{{Form::text('sube_kodu', null, ['class' =>'form-control input-lg'])}}
				<br>
				<br>
				{{Form::label('Şube ID:','')}}
				{{Form::text('sube_adi',null)}}
				<br>
				<br>
				{{Form::label('Şifre:','')}}
				{{Form::text('sifre',null)}}
				<br>
				<br>
				{{Form::label('Konum ID:','')}}
				{{Form::text('konum_id',null)}}
				<br>
				
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Creat At:</dt>
						<dd>{{ date('M j, Y H:i' , strtotime($sube->created_at))}}</dd>
						
					</dl>
					<dl class="dl-horizontal">
						<dt>Last update:</dt>
						<dd>{{date('M j, Y H:i' , strtotime($sube->updated_at))}}</dd>
						
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!!Html::linkRoute('sube.index' , 'Cancel' , array($sube->id),array('class' =>'btn btn-danger btn-block'))!!}
							
						</div>
						<div class="col-sm-6">
							{{Form::submit('KAYDET' , ['class' =>'btn btn-danger btn-block'])}}
							
						</div>
						
					</div>
					
				</div>
			</div>
			{!!Form::close()!!}
		</div>