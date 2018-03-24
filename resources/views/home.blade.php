@extends('layouts.app')

@section('content')

<section class="wrapp">
        <div class="container-fluid">
          <div class="row">
            <div class="up-panel">
              <div class="up-tab">
                <div class="searchfilter">
                  <div class="row">
                     <div class="col-md-2 text-center">
                        <div class="btn-group ">
                      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle" aria-expanded="false">
                        <span class="dropdown-label">Semua Kategori</span> 
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-select">
                          <li class="active"><a href="#"><input type="radio" checked="">Semua</a></li>
                          <li><a href="#"><input type="radio" >Kehilangan</a></li>
                          <li><a href="#"><input type="radio" >Menemukan</a></li>
                      </ul>
                    </div>
                     </div>
                      <div class="col-md-5 text-center">
                        <input type="text" class="input-sm form-control" placeholder="Cari Disini!" value="Dompet">
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
        </div>

        <div class="up-panel panel-bottom">
          <div class="up-tab">
            <div class="row">
              <div class="top-menu">
                <div class="col-md-8">
                    <ul class="breadcrumbs-list">
                      <li><a href="#"><i class="fa fa-home"></i> Inem</a></li>
                      <li><i class="fa fa-angle-right"></i></li>
                      <li><a href="#"> Semua</a></li>
                      <li><i class="fa fa-angle-right"></i></li>
                      <li class="active">
                         <h2 class="breadcrumbs-sub-title"><a href="menemukan.php">Dompet</a></h2>
                      </li>
                      
                    </ul>
                </div>
                <div class="col-md-2">
                   <form class="right">
                     <div class="form-group">             
                        <div class="btn-group m-r">
                          <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                            <span class="dropdown-label">Urutkan</span> 
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-select">
                              <li class="active"><a href="#"><input type="radio" checked="">Nama</a></li>
                              <li><a href="#"><input type="radio">Tanggal Kejadian</a></li>
                              <li><a href="#"><input type="radio">Tanggal Ngiklan</a></li>
                          </ul>
                        </div>
                      </div>
                   </form>
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
            </div>
          
          <div class="content">
            <div class="row">

              @foreach ($content as $data)
                  <div class="col-xs-6 col-sm-5 col-md-2">
                      <div class="thumbnail">
                        <a href="{{ route('content.detail',$data->id) }}">
                        <img src="{{ asset('content/'.$data->image) }}" alt=""></a>
                          <div class="caption">
                            <div class="col-md-12" style="margin-bottom: 10px;">
                              <h5>{{ $data->title }}</h5>
                            </div>
                            <a href="" class="dropdown pull-right" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-gear black"></span></a>
                            <ul class="dropdown-menu pull-right">
                              <li><a href="#" data-toggle="modal" data-target="#report"><i class="fa fa-info-circle"></i> Report</a></li>
                            </ul>
                            <p style="font-size: 14px;"><i class="fa fa-map-marker"></i> {{ $data->city }}</p>
                            <p style="font-size: 12px;"><i class="fa fa-clock-o"> {{ $data->incident }}</i></p>
                        </div>
                      </div>
                    </div>
              @endforeach          
  
            </div>

            <div class="row page">
                <div class="col-md-12 text-center">
                  <div class="page">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                </div>
            </div
            >
          </div>
        </div>
      </div> 
    </section>


      

@endsection
