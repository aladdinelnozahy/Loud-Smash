@extends('admin.master')
@section('title','Manage Songs')
@section('admincontent')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            <h5 class="title"> Add Songs</h5>
            </div>  
            @if (Session()->has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success') }}
                </div>
             @endif
            <div class="card-body">
         
            <form action="{{ route('add.song') }}" method="post">
                @csrf
                <div class=" px-md-1">
                    <div class="form-group">
                    <label>Song Name</label>
                    <input type="text" name="name" class="form-control">
                    </div>
                </div>
             
                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Author </label>
                    <input type="text" name="author" class="form-control" >
                    </div>
                </div>

                <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Release date </label>
                    <input type="text" name="reldate" class="form-control" >
                    </div>
                </div>

                {{-- <div class=" pr-md-1">
                    <div class="form-group">
                    <label>Category </label>
                    <select   name="category" >
                        @foreach ($categories as $categoy)
                        <option >  {{$category ['c_name']}}</option>
                        @endforeach
                    </select>
                     </div>
                </div> --}}

                <div class=" pr-md-1">
                    <label class="form-label" for="customFile">Upload Song Photo</label>
                    <input type="file" name="s_photo" class="form-control" id="customFile" />        
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
            </form>
            </div>
            
        </div>
    </div>
    </div>
   


@stop