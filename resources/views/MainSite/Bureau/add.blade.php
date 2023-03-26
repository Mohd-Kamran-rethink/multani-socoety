@extends('MainSite.index')
@section('content')
<style>
    .input-group{margin-bottom: 0 !important}
    .form-group{margin-bottom: 0 !important}
    label{margin-top: 15px}
    .custom-control-label{margin: 0;margin-bottom:10px }
</style>
    <main>
        <div class="container-fluid">
            <div class="dashboard-wrapper">
                <div class="row">
                    <div class="col-12">
                        <h1 class="font-weight-bold">Add a profile.</h1>

                    </div>
                </div>
                <form class="dropzone" action="{{ url('/app/bureau/add-request') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="mb-4 card">
                                <div class="card-body">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <div class="mb-3 input-group">
                                        
                                        <input name="name" placeholder="Zohaib Ahmed" type="text"
                                            class="form-control mb-0 pb-0">
                                    </div>
                                    @error('name')
                                    <span class="text-danger mt-0 pt-0">{{ $message }}</span>
                                    @enderror

                                    <div> 

                                        <label>Date of birth <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input name="dob" class="form-control datepicker " placeholder="Date">
                                            @error('dob')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <label>Phone<span class="text-danger">*</span></label>
                                        <div class="mb-3 input-group">
                                        <input name="phone" placeholder="90000000000" type="number" class="form-control">
                                    </div>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    {{-- state --}}
                                    <div class="form-group mb-3">
                                        <label>State <span class="text-danger">*</span></label>
                                        <select name="state" class="form-control select2-single" data-width="100%">
                                            <option>--Choose--</option>
                                            @foreach ($states as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    {{-- cities --}}
                                    <div class="form-group mb-3">
                                        <label>Cities <span class="text-danger">*</span></label>
                                        <select name="city" class="form-control select2-single" data-width="100%">
                                            <option value="0">--Choose--</option>
                                            <option value="">item->name </option>

                                        </select>
                                    </div>
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    {{-- Laqabs --}}
                                    <div class="form-group mb-3">
                                        <label>Laqabs </label>
                                        <select name="laqab" class="form-control select2-single" data-width="100%">
                                            <option value="0">--Choose--</option>
                                            @foreach ($laqabs as $item)
                                                <option value="{{ $item->id }}">{{ $item->laqab }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        @error('laqab')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    {{-- currently doing --}}
                                    <div class="form-group mb-3">
                                        <label>Currently Doing<span class="text-danger">*</span></label>
                                        <select name="qualification" class="form-control select2-single"
                                            data-width="100%">
                                            <option value="0">--Choose--</option>
                                            @foreach ($qualifications as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('qualification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror        
                                    <div class="form-group">
                                        <label for="exCustomRadio" class="">Gender</label>
                                        <div class="d-flex">
                                            <div class=" mr-2 custom-radio custom-control">
                                                <input type="radio" id="exCustomRadio" value="male" name="gender"
                                                    class="custom-control-input">
                                                <label class="custom-control-label m-0" for="exCustomRadio">Male</label>
                                            </div>
                                            <div class="custom-radio custom-control">
                                                <input type="radio" id="exCustomRadio2" value="female" name="gender"
                                                    class="custom-control-input">
                                                <label class="custom-control-label m-0" for="exCustomRadio2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="mb-3 mt-3">
                                        <div class="dropzone">

                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="m-0">Want to add more?</label>
                                        <textarea rows="3" name="add_more" class="form-control" placeholder="I am currently doing....."></textarea>
                                    </div>
                                    <div class="form-group mb-3 mt-3">
                                        <button class="btn btn-primary">Request to add</button>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}

                        </div>
                    </div>
                    {{-- </form> --}}
                    <br><br>
            </div>
        </div>
    </main>
@endsection
