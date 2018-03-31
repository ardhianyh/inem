@extends('layouts.app')

@section('content')

    <section class="wrapp">
        <div class="container-fluid">
            <div class="row">
                <div class="up-panel panel-bottom" style="padding-bottom: 40px;">
                    <div class="row">
                        <div class="col-md-3">

                            @include('layouts.sidebar');

                            </div>
                            <div class="col-md-9">
                                <ol class="breadcrumbs-container">
                              <div class="breadcrumbs-links">
                                <ul class="list-unstyled breadcrumbs-list">
                                  <li>
                                    <a href="{{route('profile')}}">{{Auth::user()->name}}</a>
                                  </li>
                                  <li><i class="fa fa-angle-right"></i></li>
                                  <li>
                                    <a href="{{route('content.add')}}">Post</a>
                                  </li>
                                </ul>
                              </div>
                            </ol>
                              <div class="content">

                                <form method="post" action="{{route('content.update', $content->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{method_field('PATCH')}}

                                    <input type="hidden" name="idx" value="{{$content->idx}}">

                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Judul *</label>
                                                        <input type="text" class="form-control" name="title" value="{{$content->title}}" required autofocus>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Type *</label>
                                                        <select name="type" id="type" class="form-control" required>
                                                            <option value="{{$content->type}}">{{$content->type}}</option>
                                                            <option value="Kehilangan">Kehilangan</option>
                                                            <option value="Menemukan">Menemukan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Kategori *</label>
                                                        <select class="form-control" name="category_1" required>
                                                            <option value="{{$content->category_1}}">{{$content->category_1}}</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Tipe *</label>
                                                        <select class="form-control" name="category_2" required>
                                                            <option value="{{$content->category_2}}">{{$content->category_2}}</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Merk *</label>
                                                        <input type="text" class="form-control" name="category_3" value="{{$content->category_3}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Provinsi *</label>
                                                        <select  name="province" class="form-control" required>
                                                            <option value="{{$content->province}}">{{$content->province}}</option>
                                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                                            <option value="D.I.Yogyakarta">D.I.Yogyakarta</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Kota/Kabuaten *</label>
                                                        <select class="form-control" name="city">
                                                            <option value="{{$content->city}}">{{$content->city}}</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Spesifik *</label>
                                                        <input type="text" name="place" value="{{$content->place}}" class="form-control" placeholder=" Di depan Masjid, di ATM">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tanggal Kejadian*</label>
                                                        <input type="date" class="form-control" name="incident" value="{{$content->incident}}">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Ciri Ciri *</label>
                                                    <textarea name="desc" class="form-control" required>{{$content->desc}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group col-md-12">
                                                    <label>Kronologi *</label>
                                                    <textarea name="chronology" class="form-control" required>{{$content->chronology}}</textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Note *</label>
                                                    <textarea name="note" class="form-control" required>{{$content->note}}</textarea>
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
