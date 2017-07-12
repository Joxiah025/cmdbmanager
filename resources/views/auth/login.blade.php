@extends('layouts.app')

@section('content')


<div id="login_content">
			<div class="logo">
				<img src="{{asset('img/logo.png')}}" alt="logo" class="logo-img">
			</div>
      <h1 class="login-title">
        Sign In to your account
      </h1>
      <div class="login-body">
        <form id="loginForm" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
          <div class="form-group label-floating is-empty">
            <label class="control-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
          </div>
          <div class="form-group label-floating is-empty">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <a class="forgot-pass pull-right" href="{{ route('password.request') }}">Forgot Password?</a>
          <div class="checkbox inline-block">
            <label>
              <input type="checkbox" class="checkbox-inline" name="remember" {{ old('remember') ? 'checked' : '' }}>
              Remember Me
            </label>
          </div>
          <a href="index.html" class=""></a>

          <button type="submit" class="btn btn-info btn-block m-t-40">
            Sign In
          </button>
          
        </form>
      </div>
      <div class="login-footer p-15">
        <p>
          Don't have an account? <a href="{{ route('register') }}" data-toggle="register">Create an account</a>
        </p>
      </div>
      
    </div>

    
  </div>

@endsection
