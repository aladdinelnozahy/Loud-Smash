@extends('admin.master')
@section('title','edit Events')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">edit Events</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif
            <div class="card-body">

            <form action="{{ route('update.event',$event->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Event name</label>
                    <input type="text" name="name" class="form-control" value="{{ $event->e_name }}" >
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>


                <div class="">
                    <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" value="{{ $event->e_location }}">
                    @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date" class="form-control" value="{{ $event->e_date }}">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Description</label>
                    <textarea rows="4" name="description" cols="80" class="form-control">{{ $event->e_description }}</textarea>
                    </div>
                </div>
                {{-- <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Event Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile"  value="{{ $event->e_photo }}" />
                </div> --}}
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>

@stop
