@extends('cms.layout.index')

@section('content')

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>{{$code}}</h2>
                    <a href="{{ route('cms.paket.create',$code) }}" class="btn btn-primary float-right">Add Paket</a>
                </div>
                <div class="body">
                    <h4>Stater Page</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection