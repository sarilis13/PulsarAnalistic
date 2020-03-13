@extends('layouts.app')
<div class="animate form login_form">
@section('content')
<section class="login_content">
            <form method="POST" action="{{ route('login_post') }}">
            @csrf
            <h1 style="text-align:center">PULSAR ANALISTIC</h1>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus>
                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" required=""  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

                <div class="col-md-6 offset-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Recordarme') }}
                        </label>
                    </div>
                </div>

            <div class="form-group row mb-0">
                <div class="col-sm-6 offset-sm-6">
                </div>
            </div>
            <div class="form-group row mb-0">
                    <button style="text-align:center" type="submit" class="btn btn-primary"> {{ __('Iniciar sesion') }}</button>
            </div>
            <div class="form-group row mb-0">
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link" style="text-align:center"> {{ __('CREAR CUENTA') }} </a>

            @endif
             </div>
            </form>
</section>
@endsection
</div>
