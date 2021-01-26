@extends('admin.master')
@section('title','Manage Bands')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Bands</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif  
            <div class="card-body">
          
            <form action="{{ route('add.band') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" >
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror

                    </div>
                </div>
                <div class=" pl-md-1">
                    <div class="form-group">
                    <label>Memburs number</label>
                    <input type="text" name="memnum" class="form-control"  value="{{ old('memnum') }}">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control"  value="{{ old('location') }}">
                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>created year</label>
                    <input type="text" name="createdyear" class="form-control" value="{{ old('createdyear') }}" >
                    </div>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control"> {{ old('bio') }}</textarea>
                    @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror

                    </div>
                
                <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Band Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile"  value="{{ old('photo') }}">        
                </div>
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>
            </div>


@stop