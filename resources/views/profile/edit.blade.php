@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach ($profile as $data)

                        <form action="{{ route('profile.update', $data->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="idx" value="{{$data->idx}}">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name" value="{{$data->first_name}}" required>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" placeholder="Last Name" value="{{$data->last_name}}" required>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input id="pob" type="text" class="form-control{{ $errors->has('pob') ? ' is-invalid' : '' }}" name="pob" value="{{$data->pob}}" required>
                                </div>

                                @if ($errors->has('pob'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pob') }}</strong>
                                        </span>
                                @endif

                                <div class="col-md-4">
                                    <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{$data->dob}}" required>
                                </div>

                                @if ($errors->has('dob'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                @endif

                                
                                <div class="col-md-4">
                                    <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="phone" placeholder="Phone Number" value="{{$data->phone}}" required>
                                </div>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea name="address" id="address" class="form-control" placeholder="Your Address" required>{{$data->address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success form-control">
                                            Edit Profile
                                        </button>
                                    </div>
                                </div>

                            </form>

                    @endforeach

                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
