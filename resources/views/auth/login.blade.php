@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <section class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="login">

                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                          <label class="labelLogin">Username</label>
                          <input class="form-control top" autofocus="autofocus" autocapitalize="off" required="required" title="This field is required." type="text" name="username">
                        </div>

                        <div class="form-group">
                          <label class="labelLogin">Password</label>
                          <input class="form-control bottom" required="required" title="This field is required." type="password" name="password">
                          <p class="gl-field-error hide">This field is required.</p>
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

                      <div class="loginOr text-center">
                        <span class="help-block">Login With</span>
                      </div>

                      <div class="loginwith text-center">
                        <p id="inline">
                          <a href="#" class="btn btn-rounded btn-sm btn-primary"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                          <a href="#" class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</a>
                        </p>
                      </div>

                    </div>

                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection
