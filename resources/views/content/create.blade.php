@extends('layouts.app')

@section('content')
                       


    <section class="wrapp">
        <div class="container-fluid">
            <div class="row">
                <div class="up-panel panel-bottom" style="padding-bottom: 40px;">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="sidebar" class="sidebar sidebar-default open" role="navigation">
                                <div class="sidebar-header header-cover" style="">
                                    <div class="sidebar-image">
                                        <img src="{{ asset('storage/'.AUth::user()->avatar)}}">
                                    </div>
                                    <span class="help-block text-center" style="margin-bottom: 0px;">Ardhian Yuliandra Hanum</span>
                                    <p class="text-center" style="font-size: 12px;">Since 20 Januari 2018</p>
                                </div>
                                <ul class="nav sidebar-nav">
                                    <li>
                                        <a href="profile.php">
                                            <i class="sidebar-icon fa fa-user-circle"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="sidebar-icon fa fa-list"></i>
                                            Post
                                        </a>
                                        
                                    </li>
                                    <li>
                                        <a href="setting.php">
                                            <i class="sidebar-icon fa fa-gear"></i>
                                               Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="account.php">
                                            <i class="sidebar-icon fa fa-user"></i>
                                               Account
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <ol class="breadcrumbs-container">
                              <div class="breadcrumbs-links">
                                <ul class="list-unstyled breadcrumbs-list">
                                  <li>
                                    <a href="profile.php">Ardhian Yuliandra Hanum</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <a href="post.php">Post</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <h2 class="breadcrumbs-sub-title"><a href="menemukan.php">Menemukan</a></h2>
                                  </li>
                                </ul>
                              </div>
                            </ol>
                              <div class="content">
                                <form method="post" action="{{ route('content.create') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{method_field('PATCH')}}

                                    <input type="hidden" name="idx" value="{{ Auth::user()->idx }}">
                                        
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Judul *</label>
                                                        <input type="text" class="form-control" name="title" required autofocus>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Type *</label>
                                                        <select name="type" id="type" class="form-control" required>
                                                            <option value="">-</option>
                                                            <option value="Kehilangan">Kehilangan</option>
                                                            <option value="Menemukan">Menemukan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Kategori *</label>
                                                        <select class="form-control" name="category_1" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Tipe *</label>
                                                        <select class="form-control" name="category_2" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Merk *</label>
                                                        <input type="text" class="form-control" name="category_3" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Provinsi *</label>
                                                        <select  name="province" class="form-control" required>
                                                            <option value="">Provinsi</option>
                                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                                            <option value="D.I.Yogyakarta">D.I.Yogyakarta</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Kota/Kabuaten *</label>
                                                        <select class="form-control" name="city">
                                                            <option value="">Kota/Kab</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Spesifik *</label>
                                                        <input type="text" name="place" class="form-control" placeholder=" Di depan Masjid, di ATM">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tanggal Kejadian*</label>
                                                        <input type="date" class="form-control" name="incident">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Ciri Ciri *</label>
                                                    <textarea name="desc" class="form-control" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group col-md-12">
                                                    <label>Kronologi *</label>
                                                    <textarea name="chronology" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Note *</label>
                                                    <textarea name="note" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <span class="help-block">Image</span>
                                                    <input type="file" name="image" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                                                </div>

                                                  
                                                <div class="form-group col-md-12">
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Dengan ini, saya bersedia untuk mematuhi syarat dan ketentuan yang berlaku</label>
                                                </div>
                                                <div class="form-group  col-md-12">
                                                    <input type="submit" name="submit" class="btn btn-success form-control">
                                                </div>
                                            </div>

                                         </div>
                                    </form>
                                  </div> 
                              </div>
                          </div>
                        </div>
                 </div>
          </div>

        </section>

@endsection
