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
                                            <li>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li>
                                                <h2 class="breadcrumbs-sub-title">
                                                    <a href="{{route('account.post', $user->idx)}}">Setting</a>
                                                </h2>
                                            </li>
                                        </ul>
                                    </div>
                                </ol>
                                <div class="content" style="margin-top: 20px;">
                                <div class="row">
                                 <div class="col-md-10"> 
                                  <div class="form-group">             
                                    <div class="btn-group m-r">
                                      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                        <span class="dropdown-label">Type</span> 
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu dropdown-select">
                                          <li class="active"><a href="#"><input type="radio" name="d-s-r" checked="">All</a></li>
                                          <li><a href="#"><input type="radio" name="d-s-r">Kehilangan</a></li>
                                          <li><a href="#"><input type="radio" name="d-s-r">Menemukan</a></li>
                                      </ul>
                                    </div>
                                    <div class="btn-group m-r">
                                      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                        <span class="dropdown-label">Status</span> 
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu dropdown-select">
                                          <li class="active"><a href="#"><input type="radio" name="d-s-r" checked="">All</a></li>
                                          <li><a href="#"><input type="radio" name="d-s-r">Active</a></li>
                                          <li><a href="#"><input type="radio" name="d-s-r">Inactive</a></li>
                                      </ul>
                                    </div>

                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <ul class="breadcrumbs-list right">
                                     <li>
                                       <a href="#">
                                         <button class="btn btn-default btn-sm"><i class="fa fa-th-list"> List</i></button>
                                       </a>
                                     </li>
                                     <li>
                                       <a href="#">
                                         <button class="btn btn-default btn-sm"><i class="i i-grid"></i> Grid</button>
                                       </a>
                                     </li>
                                   </ul>
                                </div>
                                </div>

                              <div class="row" style="margin-top: 20px;">
                              
                            @foreach ($content as $data)

                               <div class="col-xs-4 col-sm-5 col-md-3">
                                <div class="thumbnail">
                                  <a href="#">
                                  <img src="{{ asset('content/'.$data->image) }}" alt=""></a>
                                    <div class="caption">
                                      <div class="col-md-12" style="margin-bottom: 10px;">
                                        <h5>{{$data->title}}</h5>
                                      </div>
                                      <a href="" class="dropdown pull-right" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-gear black" aria-hidden="true" style="padding-top: 8px;"></span></a>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-edit"></i> Edit Post</a></li>
                                        <li><a href="#"><i class="fa fa-trash"></i> Delete Post</a></li>
                                      </ul>
                                      <p><i class="fa fa-map-marker"></i> {{$data->city}}</p>
                                      <p style="font-size: 12px;"><i class="fa fa-clock-o"> {{$data->incident}}</i></p>
                                  </div>
                                </div>
                              </div>
        
                            @endforeach

                            </div>

                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>          
@endsection