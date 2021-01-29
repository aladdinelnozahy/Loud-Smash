@extends('admin.master')
@section('title','Manage reservation')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Add Reservation</h5>
            </div>
             {{-- @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif --}}
            <div class="card-body">
         
            <form action="{{ route('add.reservation') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>reservation name</label>
                    <input type="text" name="name" class="form-control"  value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            
           
                <div class="">
                    <div class="form-group">  
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" >
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" >
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>event name</label>
                    <input type="text" name="event" class="form-control" value="{{ old('event') }}" >

                        @error('event')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>
         
@stop