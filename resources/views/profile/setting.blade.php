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
                              <div class="breadcrumbs-links js-title-container">
                                <ul class="list-unstyled breadcrumbs-list js-breadcrumbs-list">
                                  <li>
                                    <a href="#">{{$user->name}}</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <h2 class="breadcrumbs-sub-title"><a href="setting.php">Setting</a></h2>
                                  </li>
                                </ul>
                              </div>
                            </ol>
                              <div class="content">
                                <div class="row">
                                  <div class="col-md-4">
                                    <h4 class="edit-top">
                                      Profile Picture
                                    </h4>
                                    <p>Change or Remove your profile picture</p>
                                  </div>
                                  <div class="col-md-8">
                                    <form method="post" action="/profile/upload" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                      {{method_field('PATCH')}}
                                      @if (!is_null($user->avatar))
                                          <div class="form-group">
                                              <img src="{{asset('storage/'.$user->avatar)}}" class="img-responsive" width="200" height="200">
                                          </div>
                                      @else
                                          <div class="form-group">
                                              <img src="{{asset('storage/avatar/default.jpeg')}}" class="img-responsive" width="100" height="100">
                                          </div>
                                      @endif

                                      <div class="append-bottom-10">
                                      <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="avatar" required>
                                      </div>
                                      <div class="help-block">The maximum file size allowed is 1 Mb.</div>
                                      <button type="submit" class="btn btn-success">Upload</button>
                                      OR
                                      <a href="#" class="btn btn-danger">Remove</a>
                                  </form>
                                  </div>
                                </div>
                                <hr>
                                
                                <div class="row">
                                 <div class="col-md-4">
                                  <h4 class="edit-top">
                                    Data User
                                  </h4>
                                  <p>Infromation about you</p>
                                 </div>
                                 @foreach ($profile as $data)
                                 <form action="{{ route('profile.update', $data->id) }}" method="post">
                                  @csrf

                                <input type="hidden" name="idx" value="{{$user->idx}}">
                                 <div class="col-md-8">
                                  <div class="row">
                                    <div class="form-group col-md-4">
                                     <span class="help-block">First Name</span>
                                     <input type="text" class="form-control" name="first_name" value="{{$data->first_name}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <span class="help-block">Last Name</span>
                                     <input type="text" class="form-control" name="last_name" value="{{$data->last_name}}">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-md-4">
                                     <span class="help-block">Asal</span>
                                     <input type="text" class="form-control" name="pob" value="{{$data->pob}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                     <span class="help-block">Tanggal Lahir</span>
                                     <input type="date" class="form-control" name="dob" value="{{$data->dob}}">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-md-5">
                                     <span class="help-block">No Telepon</span>
                                     <div class="provider-btn-group">
                                     <div class="provider-btn-image">
                                     <i class="fa fa-phone"></i>
                                     </div>
                                     <input type="text" class="provider-btn not-active" name="phone" style="width: 150px;" value="{{$data->phone}}">
                                    </div>
                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="form-group col-md-8">
                                     <span class="help-block">Alamat</span>
                                     <textarea name="address" class="form-control">{{$data->address}}</textarea>
                                    </div>
                                  </div><div class="row">
                                    <div class="prepend-top-default">
                                      <input type="submit" value="Update Profile" class="btn btn-success">
                                    </div>
                                  </div>
                                 </div>
                                 </form>
                                 @endforeach
                                </div>
                                
                                <hr>

                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                 </div>
          </div>

        </section>          
@endsection