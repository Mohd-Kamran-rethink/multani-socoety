<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multani Society</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('MainTheme/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel=" stylesheet" href="{{ asset('MainTheme/font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('MainTheme/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('MainTheme/css/dore.light.blueyale.min.css') }}">
    <link rel="stylesheet" href="{{ asset('MainTheme/css/main.css') }}" />
    <style type="text/css">
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

<body id="app-container" class="ltr background no-footer">

    <main>
        <div class="container">
            <div class="h-100 row">
                <div class="mx-auto my-auto col-12 col-md-10">
                    <div class="auth-card card">
                        <div class="position-relative image-side ">
                            <p class="text-white h2">Multani Society</p>
                            <p class="white mb-0">Building a stronger community by holding hands together.<br><a
                                    class="white" href="/user/login">Get Started now</a>.</p>
                        </div>
                        <div class="form-side"><a aria-current="page" class="white active" href="/"><span
                                    class="logo-single"></span></a>
                            <div class="mb-4 card-title">Login</div>
                            <form action="{{ url('/app/login') }}" method="POST"
                                class="av-tooltip tooltip-label-bottom">
                                @csrf
                                <div class="form-group has-float-label form-group"><label
                                        class="">Phone</label><input name="phone" class="form-control"
                                        placeholder="+91 1242928293">
                                    @if (session('session-message'))
                                        <span class="text-danger">{{ session('session-message') }}</span>
                                    @endif

                                </div>



                                <div class="form-group has-float-label form-group"><label
                                        class="">Password</label><input name="password" class="form-control"
                                        type="password" placeholder="Password">
                                    @if (session('password-message'))
                                        <span class="text-danger">{{ session('password-message') }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center"><a
                                        href="/user/forgot-password">Forget password?</a><button
                                        class="btn-shadow btn-multiple-state  btn btn-primary btn-lg"><span
                                            class="spinner d-inline-block"><span class="bounce1"></span><span
                                                class="bounce2"></span><span class="bounce3"></span></span><span
                                            class="label">LOGIN</span></button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('MainTheme/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/Sortable.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/select2.full.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('MainTheme/js/dore.script.js') }}"></script>
    <script src="{{ asset('MainTheme/js/scripts.single.theme.js') }}"></script>
</body>

</html>
