@extends('MainSite.index')
@section('content')
<style>
    .card-img-top{
        height: 100px !important;
        object-fit:cover;
    }
</style>
    <main class="default-transition" style="opacity: 1;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    {{-- <h5 class="mb-4">Glide Basic</h5> --}}
                    {{-- crausel --}}
                    <div class="row mb-4">
                        <div class="col-md-12 mb-4">

                            <div class="glide center">
                                <div class="glide__track pb-3" data-glide-el="track">
                                    <div class="glide__slides">

                                        <div class="glide__slide">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <img class="card-img-top" src="https://img.freepik.com/free-photo/team-job-photo-young-businessmans-working-with-new-project-office_155003-12780.jpg?w=1060&t=st=1679723625~exp=1679724225~hmac=49285c4666801e8274e411c173db9db9ebd4ac0c7a5fefecc090a289aa4fb2b8"
                                                        alt="Card image cap">
                                                    <span
                                                        class="badge badge-pill badge-theme-2 position-absolute badge-top-left">NEWS</span>
                                                    {{-- <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span> --}}
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="mb-4">All India Multani Commettie meeting held today at Aurangabad...</h6>

                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            09.04.2018</p>
                                                    </footer>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="glide__slide">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <img  class="card-img-top" src="{{asset('MainTheme/img/ui/didYouKnow.jpeg')}}"
                                                        alt="Card image cap">
                                                    <span class="badge badge-pill badge-theme-2 position-absolute badge-top-left">TRENDING</span>
                                                    <span class="badge badge-pill  position-absolute badge-top-left-2"></span>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="mb-4">Know everythign about Multani. 
                                                    </h6>
                                                    <button class="btn btn-xs btn-primary">Explore</button>

                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            09.04.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div>
                                </div>
                                <div class="glide__arrows slider-nav" data-glide-el="controls">
                                    {{-- <button class="glide__arrow glide__arrow--left left-arrow btn btn-link"
                                        data-glide-dir="<"><i class="simple-icon-arrow-left"></i></button> --}}
                                    <div class="glide__bullets slider-dot-container" data-glide-el="controls[nav]">
                                        <button class="glide__bullet slider-dot" data-glide-dir="=0"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=1"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=2"></button>
                                    </div>
                                    {{-- <button class="glide__arrow glide__arrow--right right-arrow btn btn-link"
                                        data-glide-dir=">"><i class="simple-icon-arrow-right"></i></button> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Funds NOtification for  will re --}}
                    <div class="row">
                        {{-- @include('MainSite.Common.FundsNotification') --}}
                        @include('MainSite.Common.FeaturesCards')
                    </div>
                    {{-- world wide population --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-4">
                            <div class="card dashboard-filled-line-chart">
                                <div class="card-body ">
                                    <div class="float-left float-none-xs">
                                        <div class="d-inline-block">
                                            <h5 class="d-inline">World Wide Population</h5>
                                            <span class="text-muted text-small d-block">Its a predective data</span>
                                        </div>
                                    </div>
                                    {{-- <div class="btn-group float-right float-none-xs mt-2">
                                        <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            This Week
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="chart card-body pt-0">
                                    <div class="chartjs-size-monitor"
                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                            </div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                    </div>
                                    <canvas id="visitChart" width="594" height="374"
                                        style="display: block; height: 187px; width: 297px;"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6 col-sm-12 mb-4">
                            <div class="card dashboard-filled-line-chart">
                                <div class="card-body ">
                                    <div class="float-left float-none-xs">
                                        <div class="d-inline-block">
                                            <h5 class="d-inline">Conversion Rates</h5>
                                            <span class="text-muted text-small d-block">Per Session</span>
                                        </div>
                                    </div>
                                    <div class="btn-group float-right mt-2 float-none-xs">
                                        <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            This Week
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart card-body pt-0">
                                    <div class="chartjs-size-monitor"
                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                            </div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                    </div>
                                    <canvas id="conversionChart" width="594" height="374"
                                        style="display: block; height: 187px; width: 297px;"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    {{-- convertsion rate --}}
                    <div class="row">
                        {{-- <div class="col-md-12 col-lg-6 col-xl-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Product Categories</h5>
                                    <div class="dashboard-donut-chart chart">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <canvas id="categoryChart" width="594" height="540"
                                            style="display: block; height: 270px; width: 297px;"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-12 col-lg-6 col-xl-4 mb-4">
                            <div class="card dashboard-progress">
                                <div class="position-absolute card-top-buttons">
                                    <button class="btn btn-header-light icon-button">
                                        <i class="simple-icon-refresh"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Profile Status</h5>
                                    <div class="mb-4">
                                        <p class="mb-2">Educated
                                            <span class="float-right text-muted">12/18</span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mb-2">Business Profiles
                                            <span class="float-right text-muted">1/8</span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="15"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mb-2">NRI
                                            <span class="float-right text-muted">2/6</span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mb-2">Doctors
                                            <span class="float-right text-muted">0/8</span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mb-2">Engineers
                                            <span class="float-right text-muted">1/2</span>
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="card dashboard-small-chart-analytics">
                                        <div class="card-body">
                                            <p class="lead color-theme-1 mb-1 value">$1,250</p>
                                            <p class="mb-0 label text-small">Total Orders-Mon</p>
                                            <div class="chart">
                                                <div class="chartjs-size-monitor"
                                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                    <div class="chartjs-size-monitor-expand"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <canvas id="smallChart1" width="220" height="160"
                                                    style="display: block; height: 80px; width: 110px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card dashboard-small-chart-analytics">
                                        <div class="card-body">
                                            <p class="lead color-theme-1 mb-1 value">$115</p>
                                            <p class="mb-0 label text-small">Pending Orders-Mon</p>
                                            <div class="chart">
                                                <div class="chartjs-size-monitor"
                                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                    <div class="chartjs-size-monitor-expand"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <canvas id="smallChart2" width="220" height="160"
                                                    style="display: block; height: 80px; width: 110px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card dashboard-small-chart-analytics">
                                        <div class="card-body">
                                            <p class="lead color-theme-1 mb-1 value">$350</p>
                                            <p class="mb-0 label text-small">Active Orders-Mon</p>
                                            <div class="chart">
                                                <div class="chartjs-size-monitor"
                                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                    <div class="chartjs-size-monitor-expand"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <canvas id="smallChart3" width="220" height="160"
                                                    style="display: block; height: 80px; width: 110px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card dashboard-small-chart-analytics">
                                        <div class="card-body">
                                            <p class="lead color-theme-1 mb-1 value">$200</p>
                                            <p class="mb-0 label text-small">Shipped Orders-Mon</p>
                                            <div class="chart">
                                                <div class="chartjs-size-monitor"
                                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                    <div class="chartjs-size-monitor-expand"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <canvas id="smallChart4" width="220" height="160"
                                                    style="display: block; height: 80px; width: 110px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                    </div>


                    {{-- <div class="row sortable">
                        <div class="col-xl-3 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="position-absolute handle card-icon">
                                        <i class="simple-icon-shuffle"></i>
                                    </div>
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Profile Status</h6>
                                    <div role="progressbar" class="progress-bar-circle position-relative"
                                        data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100"
                                        aria-valuenow="40" data-show-percent="true">
                                        <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#d7d7d7" stroke-width="4" fill-opacity="0"></path>
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#922c88" stroke-width="4" fill-opacity="0"
                                                style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 180.981;">
                                            </path>
                                        </svg>
                                        <div class="progressbar-text"
                                            style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                            40%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="position-absolute handle card-icon">
                                        <i class="simple-icon-shuffle"></i>
                                    </div>
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Work Progress</h6>
                                    <div role="progressbar" class="progress-bar-circle position-relative"
                                        data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100"
                                        aria-valuenow="64" data-show-percent="true">
                                        <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#d7d7d7" stroke-width="4" fill-opacity="0"></path>
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#922c88" stroke-width="4" fill-opacity="0"
                                                style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 108.589;">
                                            </path>
                                        </svg>
                                        <div class="progressbar-text"
                                            style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                            64%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="position-absolute handle card-icon">
                                        <i class="simple-icon-shuffle"></i>
                                    </div>
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Tasks Completed</h6>
                                    <div role="progressbar" class="progress-bar-circle position-relative"
                                        data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100"
                                        aria-valuenow="75" data-show-percent="true">
                                        <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#d7d7d7" stroke-width="4" fill-opacity="0"></path>
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#922c88" stroke-width="4" fill-opacity="0"
                                                style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 75.4088;">
                                            </path>
                                        </svg>
                                        <div class="progressbar-text"
                                            style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                            75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="position-absolute handle card-icon">
                                        <i class="simple-icon-shuffle"></i>
                                    </div>
                                </div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Payments Done</h6>
                                    <div role="progressbar" class="progress-bar-circle position-relative"
                                        data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100"
                                        aria-valuenow="32" data-show-percent="true">
                                        <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#d7d7d7" stroke-width="4" fill-opacity="0"></path>
                                            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                                stroke="#922c88" stroke-width="4" fill-opacity="0"
                                                style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 205.112;">
                                            </path>
                                        </svg>
                                        <div class="progressbar-text"
                                            style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                            32%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    {{-- <div class="row">
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Order - Stock</h5>
                                    <div class="chart-container chart">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <canvas id="radarChart" width="594" height="600"
                                            style="display: block; height: 300px; width: 297px;"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Categories</h5>
                                    <div class="chart-container chart">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <canvas id="polarChart" width="594" height="600"
                                            style="display: block; height: 300px; width: 297px;"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                    {{-- <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <div class="dashboard-line-chart chart">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <canvas id="salesChart" width="594" height="566"
                                            style="display: block; height: 283px; width: 297px;"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
    </main>
@endsection
