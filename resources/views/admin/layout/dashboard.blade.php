@extends('admin.master')
@section('title','Admin Dashboard')
@section('admincontent')


<div class="row">
    <div class="col-12">
        <div class="card card-chart">
        <div class="card-header ">
            <div class="row">
            <div class="col-sm-6 text-left">
                <h5 class="card-category">Total Shipments</h5>
                <h2 class="card-title">Performance</h2>
            </div>
            
            </div>
        </div>
        <div class="card-body">
            <div class="chart-area">
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4">
        <div class="card card-chart">
        <div class="card-header ">
            <h5 class="card-category">Total Shipments</h5>
            <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary "></i> 763,215</h3>
        </div>
        <div class="card-body ">
            <div class="chart-area">
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
        <div class="card-header ">
            <h5 class="card-category">Daily Sales</h5>
            <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info "></i> 3,500€</h3>
        </div>
        <div class="card-body ">
            <div class="chart-area">
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
        <div class="card-header ">
            <h5 class="card-category">Completed Tasks</h5>
            <h3 class="card-title"><i class="tim-icons icon-send text-success "></i> 12,100K</h3>
        </div>
        <div class="card-body ">
            <div class="chart-area">
            <canvas id="chartLineGreen"></canvas>
            </div>
        </div>
        </div>
</div>
@stop