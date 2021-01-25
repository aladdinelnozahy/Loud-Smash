@extends('admin.master')
@section('title','Manage Events')
@section('admincontent')
<a href="{{ Route('event.form') }}"><button type="button" class="btn btn-success">Add New Event</button></a>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Events</h5></div>
            <div class="card-body">

                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Date</th>

                    </tr>
                    <tbody>
                            @foreach ($events as $event )
                        <tr>

                            <td>{{$event ['e_name']}}</td>
                            <td>{{$event ['e_description'] }}</td>
                            <td>{{$event ['e_location'] }}</td>
                            <td>{{$event ['date'] }}</td>
                            <td> 
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-alert">Delete</a>
                            </td>
                            @endforeach

                        </tr>
                    </tbody>

                </table>


                
            </div>
        </div>
    </div>
</div>
         
@stop