@extends('admin.master')
@section('title','Manage Artists')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Artists</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif
            <div class="card-body">
           
            <form action="{{ route('add.artist') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class=" pr-md-1">
                    <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="name" class="form-control" >
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>

                    @enderror
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control"  >
                    </div>
                </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>About</label>
                    <textarea name="about" class="form-control"></textarea>
                    @error('about')
                    <span class="text-danger">{{ $message }}</span>

                    @enderror

                    </div>
                </div>   
                <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Artist Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile" />        
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>
            </form>
            </div>
            
    </div>
</div>
</div>


@stop