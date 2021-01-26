@extends('admin.master')
@section('title','Edit Song')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Edit Songs</h5>
            </div>  
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif
            <div class="card-body">
         
            <form action="{{ route('update.song',$song->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Song Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $song->s_name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>

                    @enderror

                    </div>
                </div>
             
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Author </label>
                    <input type="text" name="author" class="form-control" value="{{ $song->s_author}}">
                    </div>
                </div>

                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Release date </label>
                    <input type="text" name="reldate" class="form-control" value="{{ $song->s_reldate }}" >
                    </div>
                </div>

                {{-- <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Category </label>
                    <select   name="category" >
                        @foreach ($songs as $song)
                        <option >  {{$songs->b_id}}</option>
                        @endforeach
                    </select>
                     </div>
                </div> --}}

                {{-- <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Song Photo</label>
                    <input type="file" name="photo" class="form-control" id="customFile" value="{{ $song->s_photo }}" />        
                </div> --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
            </form>
            </div>
            
        </div>
    </div>
    </div>
   


@stop