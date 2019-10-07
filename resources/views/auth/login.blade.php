@extends('layouts.auth-master')

@section('content')

  <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">TILA Case Prep</span></h4>
  <p class="text-muted">Before you get started, you must login.</p>

  <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
      @csrf
    <div class="form-group">
      <label for="email">Email</label>
      <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Registered email address" tabindex="1" value="{{ old('email') }}" autofocus required>
      <div class="invalid-feedback">
        Please enter in your email address
      </div>
      @if(App::environment('demo'))
      <small id="emailHelpBlock" class="form-text text-muted">
          Demo Email: admin@example.com
      </small>
      @endif
    </div>

    <div class="form-group">
      <div class="d-block">
          <label for="password" class="control-label">Password</label>
      </div>
      <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Your account password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2" required>
      <div class="invalid-feedback">
        Please enter in your account password
      </div>
      @if(App::environment('demo'))
      <small id="passwordHelpBlock" class="form-text text-muted">
          Demo Password: 1234
      </small>
      @endif
    </div>

    <div class="form-group">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
        <label class="custom-control-label" for="remember">Remember Me</label>
      </div>
    </div>

    <div class="form-group text-right">
      <a href="{{ route('password.request') }}" class="float-left mt-3">
        Forgot Password?
      </a>
      <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
        Login
      </button>
    </div>
  </form>



@endsection
