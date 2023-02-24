@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('')])

@section('content')



  <div class="container"    >
    <div class="row align-items-center">
        <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
            <h3>{{ __('') }}
            </h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="card card-login card-hidden mb-3">

                    <div class="card-header text-center"  style="height:50px" >
                        <!-- <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>  -->
                    </div>

                    <div class="card-body">

                       <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons"style="font-size:20px">person</i>
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}"
                                    {{-- value="{{ old('email', 'admin@material.com') }}" --}}
                                     required>
                            </div>
                            @if ($errors->has('email'))
                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons"style="font-size:20px">vpn_key</i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="{{ __('Password...') }}"
                                    {{-- value="{{ !$errors->has('password') ? "secret" : "" }}"  --}}
                                    required>
                            </div>
                            @if ($errors->has('password'))
                            <div id="password-error" class="error text-danger pl-3" for="password"
                                style="display: block;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-check mr-auto ml-3 mt-3">
                            {{-- <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label> --}}
                        </div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <button type="submit" style="background-color: rgb(3, 3, 53);" class="btn btn-primary ">{{ __('Entrar') }}</button>
                    </div>
                </div>
            </form>
            <div class="row">
                {{-- <div class="col-6">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-light">
                        <small>{{ __('Esqueceu a senha?') }}</small>
                    </a>
                    @endif
                </div> --}}

            </div>
        </div>
    </div>
</div>
















@endsection
