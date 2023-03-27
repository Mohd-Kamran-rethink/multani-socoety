@extends('MainSite.index')
@section('content')
    @php
        $userData = json_decode(Cookie::get('user'));
    @endphp
    <main>
        <div class="container-fluid">
            <div class="dashboard-wrapper">
                <div class="row">
                    <div class="col-12">
                        <h6><span class="font-weight-bold">Note: </span> Please do share your photos so that people could
                            interact you else we will use your profile image.</h6>
                        <div class="drag-profile " style="display: none">

                            <form action="{{ url('/app/bureau/photos/add') }}" class="dropzone" enctype="multipart/form-data">
                                @csrf
                            </form>
                            <a href="{{ url('completeProfile/addImages') }}" class="btn btn-primary mt-3 btn-sm ">Submit
                                Profile</a>
                        </div>
                        <br>
                        <div class="profile-checkbox d-flex align-items-center  ">
                            <input type="checkbox" name="checkbox" id="add-images-checkbox" class="p-0 m-0 mr-1"
                                onchange="handleBureauImage('add-image')">
                            <label for="" class="p-0 m-0">Add new images.</label>
                        </div>
                        <div class="share-image-checkbox-main  align-items-center  ">
                            <input type="checkbox" name="checkbox" id="share-profile-checkbox" class="p-0 m-0 mr-1"
                                onchange="handleBureauImage('share-profile-image')">
                            <label for="" class="p-0 m-0">Share my profile picture instead</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share Profile Image</h5>
                    <button onclick="handleBureauImage('decline')" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3> Are you sure you want to share you profile image?
                    </h3>
                    <br>

                </div>
                <div class="modal-footer">
                    <a href="{{ url('completeProfile/shareProfile') }}" type="button" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        onclick="handleBureauImage('decline')">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
