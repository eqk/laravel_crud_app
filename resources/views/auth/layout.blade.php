<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
 
  <title>Авторизация</title>
 
  <link rel="stylesheet" href="/bower/AdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/bower/AdminLTE/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="/bower/AdminLTE/plugins/iCheck/square/blue.css">

</head>

<body class="hold-transition login-page">
  
  <div class="login-box">
    <div class="login-logo">
      <a href="/">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="login-box-body">
      @yield('content')
    </div>
    
  </div>

<script src="bower/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bower/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="bower/AdminLTE/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>