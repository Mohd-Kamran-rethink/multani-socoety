@extends('MainSite.index')
@section('content')
    <main class="default-transition" style="opacity: 1;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="m-0 p-0">Marriage Bureau</h1>
                    <p class="text-muted ">Note: You can't edit you submitted bureau profile you can only delete it and
                        resubmit it.</p>

                    <div class="card mb-4">
                        <div class="card-body">
                            @if($currentUser->bureau_image_type=="new")
                            {{-- if added other images --}}
                            <div class="glide details">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/parkin.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/napoleonshat.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/marble-cake.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/fruitcake.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/magdalena.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/tea-loaf.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="glide thumbs">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <img alt="thumb" src="{{ asset('MainTheme/img/products/parkin-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb"
                                                src="{{ asset('MainTheme/img/products/napoleonshat-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb"
                                                src="{{ asset('MainTheme/img/products/marble-cake-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb"
                                                src="{{ asset('MainTheme/img/products/fruitcake-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb"
                                                src="{{ asset('MainTheme/img/products/magdalena-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb"
                                                src="{{ asset('MainTheme/img/products/tea-loaf-thumb.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="glide__arrows" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i
                                            class="simple-icon-arrow-left"></i></button>
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
                                            class="simple-icon-arrow-right"></i></button>
                                </div>
                            </div>
                            @endif
                            {{-- if shared profile picture --}}
                            @if($currentUser->bureau_image_type=="profile")
                            <div class="glide details">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <img alt="detail" src="{{ asset('MainTheme/img/products/parkin.jpg') }}"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                    </ul>
                                        
                                </div>
                            </div>
                            @endif
                            <br>

                            <h1 class="mb-0"><b>Your Details</b> </h1><br>
                            @if ($BureauData->status == 'Pending')
                                <span class="mb-1  mt-0 badge badge-info">Pending</span>
                            @elseif($BureauData->status == 'Approved')
                                <span class="mb-1  mt-0 badge badge-success">Approved</span>
                            @else
                                <span class="mb-1  mt-0 badge badge-danger">Rejected</span>
                            @endif
                            <p class="text-muted text-small mb-2 mt-4">Name</p>
                            <p class=" text-small mb-2">{{ $BureauData->full_name }}</p>
                            @php
                                use Carbon\Carbon;
                                $dob = Carbon::createFromFormat('d/m/Y', $BureauData->dob);
                                $age = $dob->age;
                            @endphp
                            <p class="text-muted text-small mb-2">Age</p>
                            <p class=" text-small mb-2">{{ $age }}</p>
                            <p class="text-muted text-small mb-2">Location</p>
                            <p class=" text-small mb-2">{{ $BureauData->city_name }} , {{ $BureauData->state_name }}</p>
                            <p class="text-muted text-small mb-2">Qualifications</p>
                            <p class=" text-small mb-2">{{ $BureauData->qualification_title }}</p>
                            <p class="text-muted text-small mb-2">Gender</p>
                            <p class=" text-small mb-2">{{ $BureauData->gender }}</p>
                            <p class="text-muted text-small mb-2">About</p>
                            <p class=" text-small mb-4">{{ $BureauData->add_more }}</p>
                            <button class="btn btn-danger btn-xs">Delete</button>
                            <button class="btn btn-info btn-xs">Deactivate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
