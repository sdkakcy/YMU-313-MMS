{!! Form::open(['route' => 'sube.store']) !!}
 
{{Form::label('sube_kodu:','')}}
{{Form::text('sube_kodu','')}}
<br>
<br>
{{Form::label('sube_adi:','')}}
{{Form::text('sube_adi','')}}
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