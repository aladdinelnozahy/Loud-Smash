@extends('admin.master')
@section('title','Manage reservations')
@section('admincontent')
<a href="{{ Route('reservation.form') }}"><button type="button" class="btn btn-success">Add New reservation</button></a>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage reservations</h5></div>
            <div class="card-body">
                @if (session()->get('deleted'))
                    <div class="alert alert-info">
                        {{ session()->get('deleted') }}
                    </div>
                 @endif
                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Event name</th>
                        <th>Edit</th>

                    </tr>
                    <tbody>
                            @foreach ($reservation as $reservation )
                        <tr>

                            <td>{{$reservation  ['r_name']}}</td>
                            <td>{{$reservation  ['r_email'] }}</td>
                            <td>{{$reservation  ['r_phone'] }}</td>
                            <td>{{$reservation  ['e_id'] }}</td>
                            <td> 
                                <a href="{{ route('edit.reservation',$reservation->id ) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete.reservation',$reservation->id ) }}" class="btn btn-danger">Delete</a>
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