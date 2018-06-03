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


<div class="wrapper" style="overflow: unset">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    {{--@include('layouts.footer')--}}
    {{--@include('layouts.contro-sidebar')--}}
    <div class="control-sidebar-bg"></div>
</div>

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
