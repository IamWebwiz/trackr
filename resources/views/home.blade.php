@extends('layouts.app')

@section('title')
    Dashboard | {{ env('APP_NAME') }}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="list-group">
                    <a href="{{ url('home') }}" class="list-group-item active">
                        Dashboard
                    </a>
                    <a href="{{ url('trackings') }}" class="list-group-item">
                        All Trackings <span class="badge">{{ DB::table('trackings')->count() }}</span>
                    </a>
                    <a href="{{ url('trackings/new') }}" class="list-group-item">
                        Add New Tracking
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="panel-body">
                        Deli Deli Deli
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
