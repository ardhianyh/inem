@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="card-columns">
			@foreach ($content as $data)
			    <div class="col-xs-6 col-sm-5 col-md-2">
                    <div class="thumbnail">
                      <a href="{{ route('content.detail',$data->id) }}">
                      <img src="images/{{$data->content_image}}" alt=""></a>
                        <div class="caption">
                          <div class="col-md-12" style="margin-bottom: 10px;">
                            <h5>{{$data->title}}</h5>
                          </div>
                          <a href="" class="dropdown pull-right" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-gear black"></span></a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#report"><i class="fa fa-info-circle"></i> Report</a></li>
                          </ul>
                          <p style="font-size: 14px;"><i class="fa fa-map-marker"></i> {{$data->city}}</p>
                          <p style="font-size: 12px;"><i class="fa fa-clock-o"> {{ $data->incident }}</i></p>
                      </div>
                    </div>
                  </div> 
			@endforeach
		</div>
	</div>

@endsection