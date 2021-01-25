@extends('admin.master')
@section('title','Manage Categories')
@section('admincontent')
<a href="{{ Route('category.form') }}"><button type="button" class="btn btn-success">Add New category</button></a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Categories</h5></div>
            <div class="card-body">
                    <select name="category" class="col-md-6" style="text-align: center">
                        
                        @foreach ( $categories as $category )
                        <option class="form-group " value="{{ $category->c_id }}">{{$category ['c_name']}}</option>
                        @endforeach
                    </select>
    
                    <div class="row">
                        <div class="col-md-10">
                            
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
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-alert">Delete</a>                        
                                </div>


            </div>
        
    </div>
</div>
    


@stop