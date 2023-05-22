{{--  @extends('adminlte::auth.login')  --}}

@extends('layouts/app', ['activePage' => 'login', 'title' => 'CouldSat::Login'])

@section('content')
    <div class="full-page section-image" data-color="black" data-image="{{ asset('light-bootstrap/img/full-screen-image-2.jpg') }}">
        <div class="content pt-5">
            <div class="container mt-5">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header" style="text-align: center">
                                <img class="group list-group-image" src="{{ 'light-bootstrap/img/logo.png' }}" alt="" width="150px"/>

                                <h3 class="header text-center">{{ __('Sistema de Acceso') }}</h3>
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email" class="col-md-6 col-form-label">{{ __('Usuario') }}</label>

                                        <div class="col-md-14">
                                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', '') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-6 col-form-label">{{ __('Contraseña') }}</label>

                                            <div class="col-md-14">
                                                <input id="password" type="password" name="password"class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', '') }}" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label d-flex align-items-center">
                                                    <input class="form-check-input" style="color:#009bde" type="checkbox" name="remember"  id="remember">
                                                    <span class="form-check-sign"></span>
                                                    {{ __('Recuerdame') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <div class="container text-center" >
                                        <button type="submit" class="btn btn-block btn-flat btn-primary">{{ __('Acceso') }}</button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-link"  style="color:#009bde; text-align: center" href="{{ route('password.request') }}">
                                        {{ __('¿Has olvidado tu contraseña?') }}
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush

