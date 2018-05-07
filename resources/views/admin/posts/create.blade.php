@extends('layouts.admin')


@section('content')
    <h1>Create Post</h1>

    <div class="row">
        {!! Form::open(['method'=>"Post",'action'=>'AdminPostController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',[''=>'Chooes categories'] + $categories,null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo-id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body','Description:') !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('create post', ['class'=>'btn btn-primary'])    !!}
        </div>

        {!! Form::close() !!}
    </div>


    <div class="row">

        @include('includes.form-error')

    </div>
@stop

