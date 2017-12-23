
{!! Form::open(['action' => 'HomeController@post_login'])!!}
 
{{Form::label('Ad:','')}}
{{Form::text('kadi','')}}
<br>
<br>
{{Form::label('Sifre:','')}}
{{Form::text('sifre','')}}
<br>

<th><a href="{{('/kayit')}}">KAYIT OL</a></th>
{!!Html::linkRoute('route.create' , 'Deneme' ,array('class' =>'btn btn-danger btn-block'))!!}
{{Form::submit('GİRİŞ')}}


{!! Form::close() !!}