@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <h4>Create new category</h4>
            </div>
            <a href="{{action('CategoryController@index')}}" class=" btn btn-block  btn-primary"> Show all category</a>
        </div>

    </div>
    <table class="table table-striped table-bordered">
        <thead class="form-group">
        <tr>
            <th>Categories name</th>
            <th style="width: 40%; ">Action</th>
        </tr>
        </thead>

        <tbody class="form-group">
        <tr>
            <td>
                {{  Form::open(['action'=>'CategoryController@store','method'=>'post'])}}
                {{ Form::text('name','',['class'=>'form-control'])}}
            </td>
            </div>
            <td>
                {{  Form::submit('Add new category',['class'=>'btn btn-block btn-primary']) }}
                {{  Form::close()}}
            </td>
        </tr>
        </tbody>


    </table>
@endsection