@extends('admin.master')
@section('title',' Song Details')
@section('admincontent')

{{-- <a href="{{ Route('song.form') }}"><button type="button" class="btn btn-success">Add New Song</button></a> --}}

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Artist Songs</h5>
            </div>
            <div class="card-body">
                {{-- @if(isset($songs)&& $songs->count >0) --}}
                <table class="table table-border title" style="color:white; text-align:center">
                    
                    <tr>
                        <th>artist songs</th>
                        {{-- <th>photo</th> --}}
                        <th>Edit</th>
                    </tr>
                    <tbody>
                            @foreach ($songs as $song )
                        <tr>

                            <td>{{$song->s_name}}</td>
                                {{-- <td> 
                                <a href="{{ route('edit.song',$song->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete.song',$song->id ) }}" class="btn btn-danger">Delete</a>
                        </td> --}}
                            @endforeach

                        </tr>
                    </tbody>
                </table>
                {{-- @else  --}}
                {{-- <h4>their is no songs </h4> --}}
                {{-- @endif --}}
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
               
                {{-- <p> <a href="" class="btn btn-primary" data-toggle="collapse">
                    Add songs</a></p> --}}
            </div>
            <div  id="collapseExample">
                <div class="card card-body">
                    <form action="{{ route('save.artist.songs') }}" method="POST">
                        @csrf
                            @if (Session()->has('success'))
                            <div class="alert alert-success">

                            {{ Session()->get('success') }}
                        </div>

                            @endif
                        <input type="text" name="artist_id" value="{{ $artist->id }}" class="form-control">
                        <select name="all_songs[]" class="form-control" multiple>
                            <option> Select Song</option>
                            @foreach ($all_songs as $all)
                            <option value="{{ $all->id }}">{{ $all->s_name }}</option>
                                
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        
        
         </div>
    </div>
</div>
 
@stop