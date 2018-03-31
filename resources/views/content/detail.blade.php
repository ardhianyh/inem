@extends('layouts.app')

@section('content')

<section class="wrapp">
          <div class="container-fluid">
             <div class="row">
                 <div class="up-panel">
                   <div class="up-tab">
                    <div class="searchfilter">
                  <div class="row">
                      <div class="col-md-7 text-center">
                        <input type="text" class="input-sm form-control" placeholder="Cari Disini!">
                      </div>
                      <div class="col-md-2 text-center">
                        <div class="inline v-middle">
                          <div class="input-group">
                              <input type="date" class="input-sm form-control">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 text-center">
                        <div class="inline v-middle">
                          <div class="input-group">
                              <input type="text" class="input-sm form-control" placeholder="Location">
                              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-1 text-center">
                        <div class="inline">
                      <button class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                      </div>
                    </div>
                  </div>

                 </div>
                  </div>
             </div>
 
            <div class="row">
              <div class="col-md-7" style="padding-left: 0;">
                <div class="up-panel">
                  <div class="up-tab">
                    <div class="detail text-center">
                          <img src="{{$content->image}}" class="img-detail">
                       </div>
                       <div class="slideImg">
                          <div class="row">

                            <div class="col-xs-3">
                                <a href="#" class="thumbnail-detial">
                                    <img src="{{$content->image}}"/>
                                </a>
                            </div>

                        </div><!-- /row -->
                       </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5" style="padding-right: 0;">
                <div class="up-panel">
                  <div class="up-tab">
                    <div class="row">
                      <div class="col-md-12">
                        <section class="panel panel-default">
                          <header class="panel-heading bg-light">
                            <ul class="nav nav-tabs nav-justified">
                              <li class="active"><a href="#umum" data-toggle="tab" aria-expanded="true">Informasi Umum</a></li>
                              <li class=""><a href="#deskripsi" data-toggle="tab" aria-expanded="false">Deskripsi</a></li>
                              <li class=""><a href="#upload" data-toggle="tab" aria-expanded="false">Upload</a></li>
                            </ul>
                          </header>
                          <div class="panel-body">

                            <div class="tab-content">
                              <div class="tab-pane active" id="umum">

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Title</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->title}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Status</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->type}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Category</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->category_1}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Type</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->category_2}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Name</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->category_3}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                      <label>Incident</label>
                                    </div>
                                    <div class="col-md-10">
                                      <span>{{$content->incident}}</span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                      <span>{{$content->place.', '.$content->city.', '.$content->province}}</span>
                                    </div>
                                  </div>

                              </div>

                              <div class="tab-pane" id="deskripsi">
                                <div class="row m-b">

                                    <div class="col-md-12">
                                      <h4>Ciri Ciri :</h4>
                                      <p>{{ $content->desc }}</p>
                                      <hr>
                                      <h4>Kronologi :</h4>
                                      <p>{{ $content->chronology }}</p>
                                       <hr>
                                      <h4>Note :</h4>
                                      <p>{{ $content->note }}</p>


                                    </div>
                                  </div>
                              </div>

                              <div class="tab-pane" id="upload">
                                @foreach ($profile as $data)
                                <div class="row">
                                  <div class="text-center">
                                    <div class="h5 m-t m-b-xs font-bold text-lt">{{$data->first_name.' '.$data->last_name}}</div>
                                    <small class="text-muted m-b">Joined {{$data->created_at}}</small>
                                  </div>
                                </div>
                                <div class="row m-b">
                                   <div class="col-md-2"></div>
                                   <div class="col-md-8">
                                     <div class="wrapper m-b">
                                    <div class="row m-b">
                                      <div class="col-xs-12 text-center">
                                        <div class="font-bold">Uploaded Time</div>
                                        <small>{{$content->created_at}}</small>
                                      </div>
                                    </div>
                                    <div class="row m-b">
                                      <div class="col-xs-6 text-right">
                                        <div class="font-bold">No Telepone</div>
                                        <small>{{$data->phone}}</small>
                                      </div>
                                      <div class="col-xs-6">
                                        <div class="font-bold">Username</div>
                                        <small><i>{{Auth::user()->username}}</i></small>
                                      </div>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <div class="font-bold">Alamat</div>
                                       <small>{{$data->address}}</small>
                                    </div>
                                  </div>
                                   </div>
                                   <div class="col-md-2"></div>
                                </div>
                                <div class="row text-center">
                                  <div class="font-bold m-b">Sosial Media</div>
                                  <p id="social-buttons">
                                    <a href="#" class="btn btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</a>
                                  </p>
                                </div>

                                @endforeach
                              </div>
                              </div>

                            </div>
                          </section>
                          <section class="cp">
                            <div class="row">
                              <div class="col-md-4 text-center">
                               <div class="thumb-lg avatar">
                                  <img src="{{asset('storage/'.Auth::user()->avatar)}}" class="dker">
                                </div>
                              </div>
                              <div class="col-md-8 contact-person">
                                <h4 class="text-center">
                                  Contact Person
                                </h4>
                                <div class="row text-center">
                                <p id="social-buttons">
                                    <a href="#" class="btn btn-rounded btn-sm btn-icon btn-success"><i class="fa fa-fw fa-whatsapp"></i> </a>
                                    <a href="mailto:{{Auth::user()->email}}" class="btn btn-rounded btn-sm btn-icon btn-danger"><i class="fa fa-fw fa-envelope"></i> </a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      </section>

@endsection
