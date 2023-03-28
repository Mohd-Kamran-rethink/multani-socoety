@extends('MainSite.index')
@section('content')
    <main class="default-transition" style="opacity: 1;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="m-0 p-0">Marriage Bureau</h1>
                    <p class="text-muted ">Note: Below data is according to our teams survey, it may be predictive not 100%
                        accurate.</p>

                    <div class="separator mb-5"></div>
                    {{-- data for bureau --}}
                    <div class="row justify-content-center text-center">

                        <div class="card mb-4 mx-1 col-5">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">

                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                    data-show-percent="true">
                                    <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#d7d7d7"
                                            stroke-width="4" fill-opacity="0"></path>
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#922c88"
                                            stroke-width="4" fill-opacity="0"
                                            style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 180.981;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                        52%</div>
                                </div>
                                <h6 class="mb-0">Unmarried Women</h6>
                            </div>
                        </div>

                        <div class="card mb-4 mx-1 col-5">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">

                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                    data-show-percent="true">
                                    <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#d7d7d7"
                                            stroke-width="4" fill-opacity="0"></path>
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#922c88"
                                            stroke-width="4" fill-opacity="0"
                                            style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 180.981;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                        6%</div>
                                </div>
                                <h6 class="mb-0">Widowed Women</h6>
                            </div>
                        </div>
                        <div class="card mb-4 mx-1 col-5">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">

                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                    data-show-percent="true">
                                    <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#d7d7d7"
                                            stroke-width="4" fill-opacity="0"></path>
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#922c88"
                                            stroke-width="4" fill-opacity="0"
                                            style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 180.981;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                        38%</div>
                                </div>
                                <h6 class="mb-0">Unmarried Men</h6>
                            </div>
                        </div>
                        <div class="card mb-4 mx-1 col-5">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">

                                <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                    data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                    data-show-percent="true">
                                    <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#d7d7d7"
                                            stroke-width="4" fill-opacity="0"></path>
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#922c88"
                                            stroke-width="4" fill-opacity="0"
                                            style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 180.981;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">
                                        4%</div>
                                </div>
                                <h6 class="mb-0">Widowed Men</h6>
                            </div>
                        </div>
                    </div>
                    {{-- question 1 --}}
                    <div class="card mb-4 mx-3">
                        <div class="card-body">
                            <a class=" collapsed d-flex justify-content-between" data-toggle="collapse"
                                href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <h6 class="font-weight-bold">Why did we initiate our marriage bureau facility, and how can
                                    you benefit from it as a Muslim seeking a life partner?</h6>
                                <i class="simple-icon-arrow-down px-2"></i>
                            </a>

                            <div class="collapse" id="collapseExample" style="">
                                <div class="px-4 pt-2 border ">
                                    <p> <b> In Islam,</b> marriage is highly encouraged and considered a means of completing
                                        half of one's
                                        faith. As
                                        the Quran states, "And among His signs is that He created for you mates from among
                                        yourselves,
                                        that
                                        you may dwell in tranquility with them, and He has put love and mercy between your
                                        hearts.
                                        Verily in
                                        that are signs for those who reflect" <b>(Quran 30:21)</b>.
                                        <br><br>
                                        Islam also encourages simplicity in marriage, and discourages extravagant and
                                        unnecessary
                                        expenses.
                                        The Prophet Muhammad (peace be upon him) said, "The most blessed nikah (marriage) is
                                        the one
                                        with
                                        the least expenses" (Hadith, Ibn Majah).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- question 2 --}}
                    <div class="card mb-4 mx-3">
                        <div class="card-body">
                            <a class=" collapsed d-flex justify-content-between" data-toggle="collapse" href="#question2"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                <h6 class="font-weight-bold">Privacy policies and restrictions?</h6>
                                <i class="simple-icon-arrow-down px-2"></i>
                            </a>

                            <div class="collapse" id="question2" style="">
                                <div class="px-4 pt-2 border ">
                                    <p> As of now women can search for mens directly, you just need to open the
                                        sidebade and goto bureau <a href="{{ url('app/bureau/?search=mens') }}"
                                            class="text-primary font-weight-bold">Men's section</a> and request them to ask
                                        the details.
                                        <br><br>
                                        But fo men they need to first share their Adhaar card, one photo, and phone
                                        verification to request data.
                                        <br>
                                        As for girls and women, Islam emphasizes the importance of protecting their privacy
                                        and modesty. Sharing personal information or images without consent can be a
                                        violation of privacy and can potentially lead to harm.
                                        <br>
                                        Islam teaches that women should be protected and respected, and this includes their
                                        personal information. Therefore, it is important to implement measures to safeguard
                                        their data and ensure that it is not being shared without their permission.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- button to navigate --}}
                    <section class="card mx-3 mb-4">
                        <div class="card-body  p-3">

                            <h4 class="px-2"><b> Search data for:-</b></h4>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="{{url('')}}" class=" btn btn-primary btn-xs">Womens</a>
                                <a href="{{url('')}}" class="mx-1 btn btn-primary btn-xs">Mens</a>
                                <a href="{{url('/app/bureau/add-request')}}" class=" btn btn-primary btn-xs">Add your's</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
