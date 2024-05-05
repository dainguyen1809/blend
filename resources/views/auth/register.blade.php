@extends('layouts.master')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form method="POST" action="{{ route('register') }}" class="billing-form ftco-bg-dark p-3 p-md-5">

                        @csrf

                        <h3 class="card-header mb-3 text-light">{{ __('Register') }}</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control border border-secondary @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="text"
                                        class="form-control border border-secondary @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control border border-secondary @error('password') is-invalid @enderror"
                                        name="password" autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password"
                                        class="form-control border border-secondary" name="password_confirmation"
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 mx-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already account?') }}
                                    </a>
                                @endif

                            </div>


                    </form><!-- END -->
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
@endsection
