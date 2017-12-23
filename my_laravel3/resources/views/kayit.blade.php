{!! Form::open(['route' => 'route.store']) !!}
 
{{Form::label('Ad:','')}}
{{Form::text('ad','')}}
<br>
<br>
{{Form::label('Soyad:','')}}
{{Form::text('soyad','')}}
<br>
<br>
{{Form::label('E-Posta:','')}}
{{Form::text('eposta','')}}
<br>
<br>
{{Form::label('Kullanıcı Adı:','')}}
{{Form::text('kadi','')}}
<br>
<br>
{{Form::label('Şifre:','')}}
{{Form::text('sifre','')}}
<br>
<br>
{{Form::label('Cep:','')}}
{{Form::text('cep','')}}
<br>
<br>
{{Form::label('Tür:','')}}
{{Form::text('tur','')}}
<br>
<br>
{{Form::label('Ticari Unvan:','')}}
{{Form::text('ticari_unvan','')}}
<br>
<br>
{{Form::label('Vergi Dairesi:','')}}
{{Form::text('vergi_dairesi','')}}
<br>
<br>
{{Form::label('TC:','')}}
{{Form::text('TC','')}}
<br>
<br>
{{Form::label('Sabit Tel:','')}}
{{Form::text('sabit_tel','')}}
<br>
<br>
{{Form::label('Sabit Tel-2:','')}}
{{Form::text('sabit_tel2','')}}
<br>
<br>
{{Form::label('Konum Id:','')}}
{{Form::text('konum_id','')}}
<br>

{{Form::submit('KAYDET')}}


{!! Form::close() !!}