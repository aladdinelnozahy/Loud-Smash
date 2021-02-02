@extends('admin.master')
@section('title','manage users')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> {{ __('translate.create user') }}</h5>
            </div>
            <div class="card-body">
            <form action="{{ route('add.user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6 px-md-1">
                        <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        </div>
                    </div>
                    <div class="col-md-6 pr-md-1">
                        <div class="form-group">
                        <label> Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                    </div>
                </div>
                <div class=" pl-md-1">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                <div class=" pl-md-1">
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control"  value="{{ old('pass') }}">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror

                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" >
                    </div>
                </div>

                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control"  >
                    </div>
                </div>
                <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload user Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile" value="{{ old('photo') }}" >
                    @error('photo')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>
                <div >
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>

            </form>
            </div>
    </div>
</div>



@stop
