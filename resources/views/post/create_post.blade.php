@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <h4>Create new post</h4>
            </div>
            <a href="{{action('PostController@index')}}" class=" btn btn-block  btn-primary"> Show all posts</a>
        </div>

    </div>
    @if(count($categories)>0)
    <table class="table table-striped table-bordered">
        <thead class="form-group">
        <tr>
            <th>Post name</th>
            <th>Description</th>
            <th>Category</th>
            <th style="width:20%">Action</th>
        </tr>
        </thead>

        <tbody class="form-group">
        <tr>
            {{  Form::open(['action'=>'PostController@store','method'=>'post'])}}
            <td>
                {{ Form::text('name','',['class'=>'form-control'])}}
            </td>
            <td>
                {{ Form::text('description','',['class'=>'form-control'])}}
            </td>
            <td>
                {{ Form::select('category_id',$categories,'',['class'=>'form-control'])}}
            </td>

            <td>
                {{  Form::submit('Add new post',['class'=>'btn btn-block btn-primary']) }}
                {{  Form::close()}}
            </td>
        </tr>
        </tbody>


    </table>
    @else
    <h2>Create minimum 1 category</h2>
    @endif
@endsection