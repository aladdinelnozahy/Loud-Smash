@extends('admin.master')
@section('title','Manage Bands')
@section('admincontent')
<a href="{{ Route('band.form') }}"><button type="button" class="btn btn-success">Add New Band</button></a>

 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Bands List</h5>
            </div>
            <div class="card-body">
                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Bio</th>
                        <th></th>
                    </tr>
                    <tbody>
                        @foreach ($bands as $band)
                            <tr>
                                <td>{{ $band ['b_name'] }}</td>
                                <td>{{ $band ['b_location']}}</td>
                                <td>{{ $band ['b_bio'] }}</td>
                                <td> 
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-alert">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 


@stop