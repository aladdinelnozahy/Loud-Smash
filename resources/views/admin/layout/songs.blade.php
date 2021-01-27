@extends('admin.master')
@section('title','Manage Songs')
@section('admincontent')

<a href="{{ Route('song.form') }}"><button type="button" class="btn btn-success">Add New Song</button></a>

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Manage Songs</h5>
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
                        <th>Author</th>
                        <th>Release Date</th>
                        <th>category</th>
                        <th>Edit</th>
                    </tr>
                    <tbody>
                            @foreach ($songs as $song )
                        <tr>

                            <td>{{$song ['s_name']}}</td>
                            <td>{{$song ['s_author'] }}</td>
                            <td>{{$song ['s_reldate'] }}</td>
                            <td>{{$song ['b_id'] }}</td>
                            <td> 
                                <a href="{{ route('edit.song',$song->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete.song',$song->id ) }}" class="btn btn-danger">Delete</a>
                        </td>
                            @endforeach

                        </tr>
                    </tbody>
                </table>

        </div>
    </div>
</div>
   


@stop