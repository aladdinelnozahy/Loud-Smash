@extends('admin.master')
@section('title','Manage Bands')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Bands</h5>
            </div>
            <div class="card-body">
            <form>
                
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class=" pl-md-1">
                    <div class="form-group">
                    <label>Memburs number</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>created year</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                
                
                
            </form>
            </div>


@stop