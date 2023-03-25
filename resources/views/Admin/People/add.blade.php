@extends('Admin.index', ['title' => 'Laqabs'])
@section('content')
    </style>
    <div class="content-header">
        <div class="container-fluid">
            @if (session()->has('msg-success'))
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-ok">
                        {{ session('msg-success') }}
                    </span>
                </div>
                {{ session()->forget('msg-success') }}
            @elseif(session()->has('msg-error'))
                {
                <div class="btn btn-danger">
                    <span class="glyphicon glyphicon-ok">
                        {{ session('msg-error') }}
                    </span>
                </div>
                {{ session()->forget('msg-error') }}
                }
            @endif
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="/admin/people/add" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Laqab Name" name="name">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Father's
                                                    Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Laqab Name" name="father">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Laqab</label>
                                                <select type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Laqab Name" name="laqab">
                                                    <option value="0">--Choose--</option>
                                                    @foreach ($laqabs as $item)
                                                        <option value="{{ $item->id }}">{{ $item->laqab }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Education</label>
                                                <select type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Laqab Name" name="qualification">
                                                    <option value="0">--Choose--</option>
                                                    @foreach ($qualifications as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date of
                                                    birth</label>
                                                <input  type="date" class="form-control"
                                                    id="salesFromDateFilter" name="dob">
                                            </div>
                                            <div class="mb-3 col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Phone" name="Phone">

                                            </div>
                                            <div class="mb-3 col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Pradesh</label>
                                                <select type="text" class="form-control " id="statesChange"
                                                    placeholder="Laqab Name" name="pradesh">
                                                    <option value="0">--Choose--</option>
                                                    @foreach ($states as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-3" id="CitiesRender">
                                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                                <select type="text" class="form-control " id="exampleFormControlInput1"
                                                    placeholder="Laqab Name" name="city">
                                                    <option value="0">--Choose--</option>

                                                </select>
                                            </div>




                                        </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        $('#statesChange').on('change', function() {
            let city_id = $(statesChange).val();
            getCityies(city_id)
        })


        function getCityies(id) {

            $.ajax({
                url: BASE_URL + "/getCity?cityId=" + id,
                success: function(data) {
                    $("#CitiesRender").html(data);
                }
            })
        }
    </script>
@endsection
