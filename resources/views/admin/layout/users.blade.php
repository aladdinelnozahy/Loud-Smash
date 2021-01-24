@extends('admin.master')
@section('title','manage users')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Users</h5>
            </div>
            <div class="card-body">
            <form>
                <div class="row">
                
                <div class="col-md-6 px-md-1">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                    </div>
                </div>
                <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" placeholder="mike@email.com">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Company" value="Mike">
                    </div>
                </div>
                <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                    </div>
                </div>
                </div>
                <div class=" pl-md-1">
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Last Name" value="Andrew">
                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Company" value="Mike">
                    </div>
                </div>
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label class="form-label" for="customFile">Default file input example</label>
                    <input type="file" class="form-control" id="customFile" />
                    </div>
                </div>
            </form>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
        </div>
    </div>
</div>
   


@stop