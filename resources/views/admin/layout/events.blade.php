@extends('admin.master')
@section('title','Manage Events')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Events</h5>
            </div>
            <div class="card-body">
            <form>
                
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
            
           
                <div class="">
                    <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Description</label>
                    <textarea rows="4" cols="80" class="form-control" ></textarea>
                    </div>
                </div>

            </form>
         
@stop