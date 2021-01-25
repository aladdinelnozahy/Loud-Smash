@extends('admin.master')
@section('title','Admin Dashboard')
@section('admincontent')


<div class="row">
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Users Count </h3>
                <h1>  <span class="badge badge-info">{{ App\Models\User::count() }}</span>  </h1>

            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Artists Count </h3>
                <h1><span class="badge badge-info">{{ App\Models\Artist::count() }}</span>  </h1>

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Bands Count </h3>
                <h1>  <span class="badge badge-info">{{ App\Models\Band::count() }}</span> </h1>

            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Songs Count </h3>
                
                <h1>  <span class="badge badge-info">{{ App\Models\Song::count() }}</span></h1>

            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Events Count </h3>
                <h1>  <span class="badge badge-info">{{ App\Models\Event::count() }}</span> </h1>

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title">Categories Count </h3>
                <h1> <span class="badge badge-info">{{ App\Models\Category::count() }}</span></h1>

            </div>
        </div>
    </div>
</div>

@stop