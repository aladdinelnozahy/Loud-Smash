@extends('admin.master')
@section('title','Manage Artists')
@section('admincontent')


<a href="{{ Route('artist.form') }}"><button type="button" class="btn btn-success">Add New Artist</button></a>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Manage Artists</h5></div>
            @if (session()->get('deleted'))
                <div class="alert alert-info">
                    {{ session()->get('deleted') }}
                </div>
             @endif

            <div class="card-body">
                <table class="table table-border title" style="color:white; text-align:center">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>About</th>
                        <th>Photo</th>
                        <th>Edit</th>

                    </tr>
                    <tbody>
                            @foreach ($artists as $artist )
                        <tr>

                            <td>{{$artist ['a_name']}}</td>
                            <td>{{$artist ['a_age'] }}</td>
                            <td>{{$artist ['a_about'] }}</td>
                            <td>{{$artist ['a_photo'] }}</td>
                            <td> 
                                <a href="" class="btn btn-success">Show songs</a>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete.artist',$artist->id ) }}" class="btn btn-danger">Delete</a>
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