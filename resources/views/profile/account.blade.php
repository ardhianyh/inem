@extends('layouts.app')

@section('content')

        <section class="wrapp">
          <div class="container-fluid">
                 <div class="row">
                   <div class="up-panel panel-bottom" style="padding-bottom: 40px;">
                          <div class="row">

                            @include('layouts.sidebar')

                            <div class="col-md-9">
                              <div class="container-fluid">
                                <ol class="breadcrumbs-container">
                              <div class="breadcrumbs-links">
                                <ul class="list-unstyled breadcrumbs-list">
                                  <li>
                                    <a href="{{route('profile')}}">Ardhian Yuliandra Hanum</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <h2 class="breadcrumbs-sub-title"><a href="{{route('account')}}">Account</a></h2>
                                  </li>
                                </ul>
                              </div>
                            </ol>
                            <div class="content">
                              @foreach ($account as $data)

                                  <form action="{{route('account.username', $data->id)}}" method="post">
                                    @csrf

                                    <div class="row">
                                      <div class="col-md-4">
                                        <h4 class="edit-top">
                                          Username
                                        </h4>
                                        <p style="font-size: 13px;">Change your username account (must different with another user)</p>
                                      </div>
                                      <div class="col-md-5">
                                        <div class="row">
                                          <div class="form-group col-md-8">
                                           <span class="help-block" style="font-size: 11px;">your username <strong><i>{{$data->username}}</i></strong></span>
                                           <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="provider-btn not-active" name="username">
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                             <input type="submit" name="commit" value="Change Username" class="btn btn-success">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>

                              @endforeach
                                    <hr>

                              @foreach ($account as $data)
                                  <form action="{{route('account.email', $data->id)}}" method="post">
                                    @csrf

                                    <div class="row">
                                     <div class="col-md-4">
                                      <h4 class="edit-top">
                                        Email
                                      </h4>
                                      <p style="font-size: 13px;">You will get the notifications about IMU on your email, and you can use email for login</p>
                                     </div>
                                      <div class="col-md-5">
                                        <div class="row">
                                          <div class="form-group col-md-8">
                                           <span class="help-block" style="font-size: 11px;">your email <strong><i> {{$data->email}} </i></strong></span>
                                           <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <input type="email" class="provider-btn not-active" name="email">
                                          </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                             <input type="submit" name="commit" value="Change Email" class="btn btn-success">
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </form>

                              @endforeach
                                    <hr>
                              @foreach ($account as $data)

                                  <form action="#" method="post">
                                    <div class="row">
                                     <div class="col-md-4">
                                      <h4 class="edit-top">
                                        Change Password
                                      </h4>
                                      <p style="font-size: 13px;">You can change your password account</p>
                                     </div>
                                      <div class="col-md-8">
                                        <div class="row">
                                          <div class="form-group col-md-5">
                                           <label>Old Password</label>
                                           <input type="password" class="form-control" name="password">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-5">
                                           <label>New Password</label>
                                           <input type="password" class="form-control" name="password">
                                          </div>
                                          <div class="form-group col-md-5">
                                            <label>Confirm New Password</label>
                                           <input type="password" class="form-control" name="password">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-8">
                                           <input type="submit" name="commit" value="Change Password" class="btn btn-success">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </form>
                              @endforeach
                                     <hr>
                              @foreach ($account as $data)
                                    <form action="#" method="post">
                                      <div class="row">
                                       <div class="col-md-4">
                                        <h4 class="edit-top">
                                          Delete Account
                                        </h4>
                                        <p style="font-size: 13px;">If your account was deleted, this account will be deleted and you can't login with this account again</p>
                                       </div>
                                        <div class="col-md-8">
                                          <div class="row">
                                            <div class="form-group col-md-12">
                                              <span class="help-block" style="font-size: 11px;">Since <strong>{{$data->created_at}}</strong></span>
                                             <div class="provider-btn-group">
                                                <div class="provider-btn-image">
                                                <i class="fa fa-key"></i>
                                                </div>
                                                <input type="text" class="provider-btn not-active" placeholder="Password">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-8">
                                             <input type="submit" name="commit" value="Delete Account" class="btn btn-danger">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </form>
                                  @endforeach
                            </div>

                                <div class="row">
                                  <div class="text-center">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                 </div>
          </div>

@endsection