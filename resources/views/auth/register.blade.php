@extends('layouts.app')
<div id="register" class="animate form registration_form">
@section('content')
<section class="login_content">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 style="text-align:center"> NUEVO REGISTRO</h1>
            <div>
                    <input type="text" placeholder="Username" required="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
                <div>
                    <input type="email" placeholder="Email" required="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
                <div>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repet Password" required="" >
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                    </button>
                </div>
            <div class="clearfix"></div>
            <div class="separator">
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="nav-link" style="text-align:center"> {{ __('INICIAR SESION') }} </a>

            @endif
             </div>
            </form>

</section>
@endsection
</div>
