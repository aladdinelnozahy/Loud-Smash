@extends('admin.master')
@section('title','Manage Categories')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Categories</h5>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Add category</label>
                    <input type="text" class="form-control" >
                </div>
            </form>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
        </div>
    </div>
</div>
    


@stop