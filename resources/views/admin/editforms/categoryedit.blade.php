@extends('admin.master')
@section('title','edit Categories')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Edit Categories</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('update.category',$category->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label>Edit category</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->c_name }}" >
                    
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <button type="submit" class="btn btn-fill btn-primary">save</button>

            </form>

            </div>
    </div>
</div>
      


@stop