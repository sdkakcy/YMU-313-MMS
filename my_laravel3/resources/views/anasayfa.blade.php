
<head>
    <title>Ana Sayfa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/googlecss.css" rel="stylesheet">


  </head>

  <body>
    <header>
      <nav>
        <ul id="nav_bar">

          <li id="sign_in"><a href="login">LOGIN</a></li>
        </ul>
      </nav>
    </header>

    <!-- GOOGLE IMG -->
    <div class="google">
      <a href="#" id="google_logo"><img src="foto.png" /></a>
    </div>

    <!-- FORM SEARCH -->
    {!! Form::open(['arama' => 'arama.store']) !!}
    <div class="form">
        {{Form::text('arama','',['placeholder'=>'urun ismi'])}}


      </div>
        <div class= "buttons">
      {{Form::submit('BUL')}}
    </div>

    {!! Form::close() !!}


    <!-- FOOTER -->
    <footer>


    </footer>
  </body>
