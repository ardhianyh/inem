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
                                    <a href="{{route('profile', Auth::user()->idx)}}">Ardhian Yuliandra Hanum</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <h2 class="breadcrumbs-sub-title">Profile</h2>
                                  </li>
                                </ul>
                              </div>
                            </ol>
                              <div class="content">
                                  <div class="col-md-4">
                                      <div class="sidebar-image text-center" style="margin-top:  10px; margin-bottom: 25px;">
                                          @if (!is_null(Auth::user()->avatar))
                                                <div class="form-group">
                                                    <img src="{{asset('storage/'.Auth::user()->avatar)}}" class="img-responsive" width="300" height="300">
                                                </div>
                                            @else
                                                <div class="form-group">
                                                    <img src="{{asset('storage/avatar/default.jpeg')}}" class="img-responsive" width="300" height="300">
                                                </div>
                                            @endif
                                      </div>
                                      <span class="help-block text-center" style="margin-bottom: 0px;">
                                        
                              @foreach ($profile as $data)

                                          {{ Auth::user()->name }}

                                      </span>
                                        <hr>
                                  </div>
                                  <div class="col-md-8">
                                   <div class="content-profile">
                                       <div class="row">
                                         <div class="col-md-5">
                                           <div class="content-left">
                                             <span class="help-block">Nama Depan</span>
                                           <div class="provider-btn-group">
                                              <div class="provider-btn-image">
                                              <i class="fa fa-user"></i>
                                              </div>
                                              <input type="text" class="provider-btn not-active" value="{{$data->first_name}}" style="width: 150px;" readonly>
                                           </div>
                                           </div>
                                         </div>
                                         <div class="col-md-6">
                                           <span class="help-block">Nama Belakang</span>
                                           <div class="provider-btn-group">
                                              <div class="provider-btn-image">
                                              <i class="fa fa-user"></i>
                                              </div>
                                              <input type="text" class="provider-btn not-active" value="{{$data->last_name}}" style="width: 150px;" readonly>
                                           </div>
                                         </div>
                                       </div>
                                       <div class="row">
                                         <div class="col-md-5">
                                            <span class="help-block">Username</span>
                                            <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-user-circle"></i>
                                            </div>
                                            <input type="text" class="provider-btn not-active" value="{{Auth::user()->username}}" style="width: 150px;" readonly>
                                         </div>
                                         </div>
                                         <div class="col-md-6">
                                            <span class="help-block">Email</span>
                                            <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <input type="text" class="provider-btn not-active" value="{{Auth::user()->email}}" style="width: 200px;" readonly>
                                         </div>
                                         </div>
                                        </div>

                                        <div class="row">
                                         <div class="col-md-5">
                                            <span class="help-block">No Telepon</span>
                                            <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="provider-btn not-active" value="{{$data->phone}}" style="width: 150px;" readonly>
                                         </div>
                                         </div>
                                         <div class="col-md-5">
                                            <span class="help-block">Tanggal Lahir</span>
                                            <div class="provider-btn-group">
                                            <div class="provider-btn-image">
                                            <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="provider-btn not-active" value="{{$data->dob}}" style="width: 100px;" readonly>
                                         </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-10">
                                            <span class="help-block">Alamat</span>
                                          <textarea class="form-control" style="background-color: #fafafa;" readonly>{{$data->address}}</textarea>
                                          </div>
                                        </div>
                                   </div>
                                  </div>
                                </div>
                              @endforeach
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