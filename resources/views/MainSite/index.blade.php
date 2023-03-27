<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        BASE_URL = "<?php echo url(''); ?>";
    </script>
    <meta charset="UTF-8">
    <title>Multani Society</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('MainTheme/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel=" stylesheet" href="{{ asset('MainTheme/font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/dropzone.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/dropzone.min.css')}}" />
    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('MainTheme/css/dore.light.blueyale.min.css') }}">\
    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('MainTheme/css/vendor/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/main.css') }}" />
    <style type="text/css">
       /* Hide scrollbar for Chrome, Safari and Opera */
body::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
body {
  -ms-overflow-style: none; /* IE and Edge */
  scrollbar-width: none; /* Firefox */
}
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body id="app-container" class="menu-default show-spinner">


    @include('MainSiteLayout.nav')
    @include('MainSiteLayout.sidebar')
    @yield('content')


    @include('MainSiteLayout.footer')



    <script src="{{ asset('MainTheme/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('MainTheme/js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('MainTheme/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/Sortable.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/select2.full.js') }}"></script>
    <script src="{{asset('MainTheme/js/vendor/dropzone.min.js')}}"></script>
    
    <script src="{{ asset('MainTheme/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/dore.script.js') }}"></script>
    <script src="{{ asset('MainTheme/js/main.js') }}"></script>
    <script src="{{ asset('MainTheme/js/scripts.single.theme.js') }}"></script>

</body>

</html>
