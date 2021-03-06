@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <h4>Categories</h4>
            </div>
            <a href="{{action('CategoryController@create')}}" class=" btn btn-block  btn-primary"> Add new category</a>
        </div>

    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Categories name</th>
            <th>All Post</th>
            <th style="width: 40%; ">Action</th>
        </tr>
        </thead>

        <tbody>
        <td>{{$category->name}}</td>
        <td>

            @foreach($category->posts as $post)
                <li>{{$post->name }}</li>
            @endforeach

        </td>
        <td>
            {{Form::open(['action'=>['CategoryController@destroy',$category->id],'method'=>'DELETE'])}}


            <a href="{{action('CategoryController@edit',$category->id)}}" class="btn btn-info btn-sm">Edit
                category</a>

            {{Form::submit('Delete category',['class'=>'btn btn-danger btn-sm'])}}
            {{Form::close()}}
        </td>
        </tbody>


    </table>
@endsection