@extends('admin.master')
@section('title','Manage Categories')
@section('admincontent')
<a href="{{ Route('category.form') }}"><button type="button" class="btn btn-primary ">Add New category</button></a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Manage Categories</h5>
            </div>
            @if (session()->get('deleted'))
                <div class="alert alert-info">
                    {{ session()->get('deleted') }}
                </div>
             @endif

            <div class="card-body">
                    <select name="category" class="col-md-6" style="text-align: center">
                        
                        @foreach ( $categories as $category )
                        <option class="form-group " value="{{ $category->c_id }}">{{$category ['c_name']}}</option>
                        @endforeach
                    </select>
    
                    <table class="table table-border title" style="color:white; text-align:center">
                     
                        <tr>
                            <th>Category Name</th>
                            <th>edit</th>
                        </tr>
                        <tbody>
                            @foreach ( $categories as $category )

                            <tr>
                                <td>
                                    {{$category ['c_name']}}
                                </td>
                                <td> 
                                    <a href="{{ route('show.songs',$category->c_id) }}" class="btn btn-success">Show songs</a>
                                    <a href="{{ route('edit.category',$category->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.category',$category->id ) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            {{-- <option class="form-group " value="{{ $category->c_id }}">{{$category ['c_name']}}</option> --}}
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        
    </div>
</div>
    


@stop