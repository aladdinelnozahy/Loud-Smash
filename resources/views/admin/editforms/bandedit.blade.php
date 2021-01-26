@extends('admin.master')
@section('title','Edit Bands')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Edit Bands</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif  
            <div class="card-body">
          
            <form action="{{ route('update.band',$band->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $band->b_name }}" >
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror

                    </div>
                </div>
                <div class=" pl-md-1">
                    <div class="form-group">
                    <label>Memburs number</label>
                    <input type="text" name="memnum" class="form-control" value="{{ $band->b_memnum }}">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" value="{{ $band->b_location }}">
                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>created year</label>
                    <input type="text" name="createdyear" class="form-control" value="{{ $band->b_createdyear }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control" >{{ $band->b_bio }}</textarea>
                    @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror

                    </div>
                
                <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Band Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile" value="{{ $band->b_photo }}"/>        
                </div>
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>
            </div>


@stop