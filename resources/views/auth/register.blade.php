@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <section class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="login">

                      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                          <label class="labelLogin">Name</label>
                          <input class="form-control top" type="text" name="name" required>
                        </div>

                        <div class="form-group">
                          <label class="labelLogin">Username</label>
                          <input class="form-control top" type="text" name="username" required>
                        </div>

                        <div class="form-group">
                          <label class="labelLogin">Email</label>
                          <input class="form-control bottom" type="email" name="email">
                        </div>

                        <div class="form-group row">
                          <div class="col-md-6">
                              <label class="labelLogin">Password</label>
                              <input class="form-control bottom" type="password" name="password">
                          </div>
                          <div class="col-md-6">
                                <label class="labelLogin">Confirm Password</label>
                                <input class="form-control bottom" type="password" name="password_confirmation">
                          </div>
                        </div>

                        <div class="form-group">
                            <label>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                              <span class="labelLogin">Remember me</span>
                            </label>
                            <div class="pull-right forgot-password">
                              <a href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>
                        </div>

                        <div class="submit-container move-submit-down">
                          <input type="submit" name="commit" value="Sign in" class="btn btn-success btn-block">
                        </div>

                      </form>

                    </div>

                  </div>
                </div>
              </section>
        </div>
    </div>
</div>

@endsection
