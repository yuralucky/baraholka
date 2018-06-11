@extends('main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ action('CategoryController@index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        {!!  Form::open(['action'=>'CategoryController@store','method'=>'post'])!!}
        {!! Form::label('name',['class'=>'form-control'])!!}
        {!! Form::text('name','',['class'=>'form-control'])!!}
        {!!  Form::submit('Add new category')!!}
        {!!  Form::close()!!}
    </div>
@endsection