@extends('admin.master')
@section('title','Manage Categories')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Categories</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('add.category') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label>Add category</label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>

            </div>
    </div>
</div>
      


@stop