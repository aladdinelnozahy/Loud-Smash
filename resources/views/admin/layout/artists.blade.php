@extends('admin.master')
@section('title','Manage Artists')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Artists</h5>
            </div>
            <div class="card-body">
            <form>
              
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label> Name</label>
                    <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control"  >
                    </div>
                </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>About</label>
                    <textarea class="form-control"></textarea>
                    </div>
                </div>   
               
            </form>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
        </div>
    </div>
</div>
</div>


@stop