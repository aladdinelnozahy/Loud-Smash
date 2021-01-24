@extends('admin.master')
@section('title','Manage Songs')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Manage Songs</h5>
            </div>
            <div class="card-body">
            <form>
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Song Name</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
             
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Author </label>
                    <input type="text" class="form-control" >
                    </div>
                </div>

                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Release Year </label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                
            </form>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
        </div>
    </div>
    </div>
   


@stop