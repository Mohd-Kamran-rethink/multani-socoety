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
                                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" required>
                                        <button type="submit">Import Data</button>
                                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
   
@endsection
