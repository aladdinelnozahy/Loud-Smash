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

            @if (session()->get('deleted'))
                <div class="alert alert-info">
                    {{ session()->get('deleted') }}
                </div>
            @endif


            <div class="card-body">
                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>Name</th>
                        <th>Memburs Number</th>
                        <th>Location</th>
                        <th>Created Year </th>
                        <th>Bio</th>
                        <th>Edit</th>
                    </tr>
                    <tbody>
                        @foreach ($bands as $band)
                            <tr>
                                <td>{{ $band ['b_name'] }}</td>
                                <td>{{ $band ['b_memnum'] }}</td>
                                <td>{{ $band ['b_location']}}</td>
                                <td>{{ $band ['b_createdyear'] }}</td>
                                <td>{{ $band ['b_bio'] }}</td>
                                <td> 
                                    <a href="" class="btn btn-success">Show songs</a>
                                    <a href="{{ route('edit.band',$band->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.band',$band->id ) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 


@stop