@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Account Info') }}</div>

                <div class="card-body">
                    @foreach ($account as $data)
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{ $data->name }}" name="name" readonly autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $data->username }}" readonly autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                            <div class="col-md-4">

                                @if(Auth::user()->avatar)
                                    <img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="avatar" width="200" height="200">
                                @else
                                    <img src="{{ asset('storage/default.jpeg') }}" alt="avatar">
                                @endif

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('account.edit', $data->id) }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Edit User') }}
                                    </button>
                                </a>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
