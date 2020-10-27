@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
=======
    <div class="login-box" style="
        width: 480px;
        margin: 7% auto;
        box-sizing: 1px 2px 25px #000;
        box-shadow: 0px 0px 2px;
    ">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title"><b>Hotel</b> Booking</h3>
            </div>
            <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="font-size: 18px;">Email</label>
                <div class="col-sm-9">
                    <input id="email" type="email" id="inputEmail3" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus placeholder="Email..."
                    style="font-size: 16px;
                    ">
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="font-size: 15px">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
>>>>>>> dbdd84abc2d60a4b25c46b56794eba80e36f4968
                </div>
                </div>
                <div class="form-group">

                <label for="inputPassword3" class="col-sm-3 control-label" style="font-size: 18px;">Password</label>
                <div class="col-sm-9">
                    <input id="password" type="password" id="inputPassword3" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password..."
                    style="font-size: 16px;
                    margin-top: 10px;">
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="font-size: 15px">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn-flat"
                style="width: 94%;
                        margin: auto;
                        font-size: 15px;">
                    {{ __('Login') }}
                </button>
            </div>
            <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
