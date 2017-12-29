

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LOGIN </title>

  <!-- Bootstrap core CSS -->

  <link href="backend/css/bootstrap.min.css" rel="stylesheet">

  <link href="backend/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="backend/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="backend/css/custom.css" rel="stylesheet">
  <link href="backend/css/icheck/flat/green.css" rel="stylesheet">


  <script src="backend/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          {!! Form::open(['action' => 'HomeController@post_login'])!!}
          <h1>Login </h1>

          {{Form::text('kadi','', ['class' => 'form-control','placeholder'=>'Username'])}}
          {{Form::text('sifre','', ['class' => 'form-control','placeholder'=>'Password'])}}
          <th><a href="{{('/kayit')}}">KAYIT OL</a></th>
          {!!Html::linkRoute('route.create' , 'Deneme' ,array('class' =>'btn btn-danger btn-block'))!!}
          {{Form::submit('GİRİŞ')}}
          {!! Form::close() !!}







            <div class="clearfix"></div>
            <div class="separator">

              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> MMS</h1>

                <p>©2017 MMS</p>
              </div>
            </div>
          
          <!-- form -->
        </section>
        <!-- content -->
      </div>

    </div>
  </div>

</body>

</html>
