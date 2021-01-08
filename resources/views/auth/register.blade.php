@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-md-5 font-weight-bold">Daftar Akun Baru</h2>
  <div class="row">
    <div class="text-center col-md-6 order-md-last bg-primary bg-gradient">
      <h1 class="text-white">Good to see you!</h1>
      <p class="text-white">You already have an account? Sign in!</p>

    </div>
    <div class="col-md-6">
      <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="name" class="control-label">{{ __('Nama Lengkap') }}</label>
            <input id="name" type="text" class="form-control font-weight-medium @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control font-weight-medium @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Alamat Email" required autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-group">
            <label for="password" class="control-label">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control font-weight-medium @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          {{-- <div class="form-group">
            <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control font-weight-medium" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
          </div> --}}

          <div class="form-group" {{$errors->has('role') ? ' has-error' : null}}>
            <label for="role" class="control-label">{{ __('Type User') }}</label>
            <select name="role" id="" class="form-control">
              <option value="" hidden selected>-- Pilih Type User --</option>
              <option value="typeA">Type A</option>
              <option value="typeB">Type B</option>
              <option value="typeC">Type C</option>
            </select>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class=" form-group">
            <button type="submit" class="px-4 btn btn-primary btn-md font-weight-bold">
              {{ __('Register') }}
            </button>
          </div>
          <hr class="mt-4 mb-3">
          <div class="pt-4">
            <div class="mb-3 font-weight-medium">
              Sudah Punya Akun? <a href="/login"><strong>Masuk Sekarang</strong></a>
            </div>
          </div>
          <div>
            <div class="mb-2 mr-2 d-md-inline-block mb-md-0 font-weight-medium">
              Atau daftar menggunakan
            </div>
            <a href="{{url('/auth/google')}}" class="mr-2 btn btn-danger" title="Daftar dengan Google">
              <i class="fa fa-google"></i>
            </a>
            <a href="{{url('/auth/facebook')}}" class="btn btn-primary " title="Daftar dengan Facebook">
              <i class="fa fa-facebook"></i>
            </a>
          </div>
      </form>
    </div>

  </div>
</div>
@endsection
