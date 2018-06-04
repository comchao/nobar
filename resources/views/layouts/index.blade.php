<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
    {{--<link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">--}}

    <style>
        input.form-control.flatpickr-input {
            background: white;
        }

        #menus > div > div {
            cursor: pointer;
        }

        #menus h4, #menus h3 {
            font-size: 23px;
        }

        #header_branch_name {
            line-height: 50px;
            display: inline-block;
            color: white;
            font-size: 18px;
            margin-left: 10px;
        }

        [v-cloak] {
            display: none;
        }

    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini" style="overflow: unset">




    @if(\Illuminate\Support\Facades\Auth::user())
        <div class="wrapper" style="overflow: unset">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        <div class="control-sidebar-bg"></div>
        </div>
        @else
        @include('auth.login')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{--@include('layouts.footer')--}}
    {{--@include('layouts.contro-sidebar')--}}



@include('layouts.scripts')
<script src="{{asset('js/bootstrap-confirm-delete.js')}}"></script>
@stack('scripts')
<script>
    $(function () {
        $('form').on('focus', 'input[type=number]', function (e) {
            $(this).on('mousewheel.disableScroll', function (e) {
                e.preventDefault()
            })
        })
        $('form').on('blur', 'input[type=number]', function (e) {
            $(this).off('mousewheel.disableScroll')
        })
    })
</script>


</body>
</html>
