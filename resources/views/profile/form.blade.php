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

                     <form method="POST" action="{{ route('profile.insert')}}">
                        @csrf
                        <input type="hidden" name="idx" value="{{ Auth::user()->idx }}">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name" required>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" placeholder="Last Name" required>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="pob" type="text" class="form-control{{ $errors->has('pob') ? ' is-invalid' : '' }}" name="pob" required>
                            </div>

                            @if ($errors->has('pob'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pob') }}</strong>
                                    </span>
                            @endif

                            <div class="col-md-4">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" required>
                            </div>

                            @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                            @endif

                            
                            <div class="col-md-4">
                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="phone" placeholder="Phone Number" required>
                            </div>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="address" id="address" class="form-control" placeholder="Your Address" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary form-control">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
