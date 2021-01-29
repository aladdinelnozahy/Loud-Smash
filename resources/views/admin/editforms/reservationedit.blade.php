@extends('admin.master')
@section('title','edit Reservation')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">edit reservation</h5>
            </div>
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif
            <div class="card-body">
         
            <form action="{{ route('update.reservation',$reservation->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Event name</label>
                    <input type="text" name="name" class="form-control" value="{{ $reservation->r_name }}" >
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            
           
                <div class="">
                    <div class="form-group">  
                    <label>Email</label>
                    <input type="text" name="location" class="form-control" value="{{ $reservation->r_email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="date" class="form-control" value="{{ $reservation->r_phone }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                
               
                <button type="submit" class="btn btn-fill btn-primary">Save</button>

            </form>
         
@stop