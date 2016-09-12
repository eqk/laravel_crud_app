@extends('auth.layout')

@section('content')

 <p class="login-box-msg">Регистрация</p>
 
 <form role="form" method="POST" action="{{ url('/register') }}">
     {{ csrf_field() }}

     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Имя">

             @if ($errors->has('name'))
                 <span class="help-block">
                     <strong>{{ $errors->first('name') }}</strong>
                 </span>
             @endif
     </div>

     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail">

             @if ($errors->has('email'))
                 <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
             @endif
     </div>

     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         
             <input id="password" type="password" class="form-control" name="password" placeholder="Пароль">

             @if ($errors->has('password'))
                 <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
                 </span>
             @endif
    </div>

     <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Подтверждение пароля">

             @if ($errors->has('password_confirmation'))
                 <span class="help-block">
                     <strong>{{ $errors->first('password_confirmation') }}</strong>
                 </span>
             @endif
     </div>

     <div class="form-group text-center">
             <button type="submit" class="btn btn-primary btn-block btn-flat">
                 Регистрация
             </button>
  
     </div>

     <div class="clearfix"></div>
 </form>

@endsection
