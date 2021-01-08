@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-md-5 font-weight-bold">Masuk</h2>
  <div class="row">
    <div class="text-center col-md-6 order-md-last">
      <h1>Hello Friends</h1>
      <p>You don't have account yet? Don't worry! You still can join us</p>
    </div>
    <div class="col-md-6">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
          <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control font-weight-medium @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required  autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        </div>

        <div class="form-group">
            <label for="password" class="control-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control font-weight-medium @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" required  autocomplete="off">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
          <button type="submit" class="px-4 btn btn-primary btn-md font-weight-bold">
              {{ __('Login') }}
          </button>

          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Lupa Password?') }}
              </a>
          @endif
        </div>
        <div class="form-group">
          <div class="mb-3">
            <div class="mb-2 mr-2 d-md-inline-block mb-md-0 font-weight-medium">Atau masuk dengan</div>
            <a href="{{url('/auth/google')}}" class="mr-2 btn btn-danger"  title="Masuk dengan Google">
              <i class="fa fa-google"></i>
            </a>
            <a href="{{url('/auth/facebook')}}" class="btn btn-primary " title="Masuk dengan Facebook">
              <i class="fa fa-facebook"></i>
            </a>
          </div>
          <div class="font-weight-medium">
            Belum punya akun? Ayo <a href="/register"><strong>Daftar</strong></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
