@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <h4>Categories</h4>
            </div>
            <a href="{{action('PostController@create')}}" class=" btn btn-block  btn-primary"> Add new post</a>
        </div>

    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Post name</th>
            <th>Description</th>
            <th>Category</th>
            <th style="width: 40%; ">Action</th>
        </tr>
        </thead>

        <tbody>
        <td>{{$post->name}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->category_name}}</td>
        <td>
            {{Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'DELETE'])}}


            <a href="{{action('PostController@edit',$post->id)}}" class="btn btn-info btn-sm">Edit
                post</a>

            {{Form::submit('Delete post',['class'=>'btn btn-danger btn-sm'])}}
            {{Form::close()}}
        </td>
        </tbody>


    </table>
@endsection