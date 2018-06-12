@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <h4>Edit post</h4>
            </div>
            <a href="{{action('PostController@create')}}" class=" btn btn-block  btn-primary"> Add new post</a>
        </div>

    </div>
    <table class="table table-striped table-bordered">
        <thead class="form-group">
        <tr>
            <th>Post name</th>
            <th>Description</th>
            <th>Category</th>
            <th style="width: 40%; ">Action</th>
        </tr>
        </thead>

        <tbody class="form-group">
        <tr>
            <td>
                {{Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id]])}}
                {{Form::text('name',$post->name,['class'=>'form-control'])}}
            </td>
            <td>
                {{Form::text('description',$post->description,['class'=>'form-control'])}}
            </td>
            <td>
                {{Form::text('categories_id',$post->category->id,['class'=>'form-control'])}}
            </td>

            <td>
                {{Form::submit('Update post',['class'=>'btn btn-primary btn-sm'])}}
                {{Form::close()}}
            </td>
        </tr>
        </tbody>


    </table>
@endsection