@extends('auth.layout')

@section('content')
 <p class="login-box-msg">Авторизация</p>
 
<form method="POST" action="{{ url('/login') }}">
  {{ csrf_field() }}
  <!-- Ввод email -->
  <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
    <input id="email" type="email" class="form-control" placeholder="Email"  value="{{ old('email') }}" name="email">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      
    @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif
  </div>
  <!-- /.ввод email -->
  <!-- Ввод пароля -->
  <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
    <input id="password" type="password" class="form-control" placeholder="Password" name="password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
    @endif
  </div>
  <!-- /.ввод пароля -->
  <div class="row">
    <div class="col-xs-8">
      <div class="checkbox icheck" style="margin: 0">
        <input type="checkbox" name="remember">
        <label style="margin: 5px">
           Запомнить
        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xs-4">
      <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
    </div>
    <!-- /.col -->
  </div>

</form>

@endsection
