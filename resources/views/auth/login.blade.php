@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('asset/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/vendors/css/vendor.bundle.base.css')}}">

    <link rel="stylesheet" href="{{asset('asset/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/assets/images/favicon.ico')}}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{asset('asset/assets/images/logo.svg')}}">
                            </div>
                            <h3>Login Sistem Pakar Kecantikan</h3>
                            <h6 class="font-weight-light">Login untuk ke sistem pakar kecantikan</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan Email" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">LOG IN</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Belum memiliki akun? <a href="register" class="text-primary">Daftar Sekarang</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('asset/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('asset/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('asset/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('asset/assets/js/misc.js')}}"></script>
</body>

</html>
@endsection