@extends('admin.master')
@section('title','manage users')
@section('admincontent')

<a href="{{ Route('user.form') }}"><button type="button" class="btn btn-success">Add New User</button></a>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Users</h5>
            </div>
            @if (session()->get('deleted'))
                <div class="alert alert-info">
                    {{ session()->get('deleted') }}
                </div>
            @endif
            <div class="card-body">

                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Edit</th>
                    </tr>
                    <tbody>
                            @foreach ($users as $user )
                        <tr>

                            <td>{{$user ['u_name']}}</td>
                            <td>{{$user ['u_email'] }}</td>
                            <td>{{$user ['u_phone'] }}</td>
                            <td> 
                                <a href="{{ route('edit.user',$user->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete.user',$user->id ) }}" class="btn btn-danger">Delete</a>
                        </td>
                            @endforeach

                        </tr>
                    </tbody>
                </table>




            </div>
    </div>
</div>
   


@stop