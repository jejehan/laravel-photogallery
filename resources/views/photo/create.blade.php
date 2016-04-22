@extends('layouts.main');

@section('content')

<div class="callout primary">
    <div class="row column">
        <a href="/gallery/show/{{ $gallery_id }}"> Back to Galleries </a>
    </div>
    <h1> Create Photo</h1>
</div>

<div class="row small-up-2 medium-up-12 large-up-12">
    <div class="column">
        {!! Form::open(array( 'action'=>'PhotoController@store', 'enctype'=>'multipart/form-data' )) !!}
            {!! Form::hidden('gallery_id',$value=$gallery_id) !!}

            {!! Form::label('image','Image') !!}
            {!! Form::file('image') !!}
            {!! Form::label('title','Title') !!}
            {!! Form::text('title', $value = null, $attributes = [ 'placeholder'=>'Title' ,'name' => 'title']) !!}
            {!! Form::label('location','Location') !!}
            {!! Form::text('location', $value = null, $attributes = [ 'placeholder'=>'Location' ,'name' => 'location']) !!}
            {!! Form::label('description','Description') !!}
            {!! Form::textarea( 'description', $value = null, $attributes = [ 'placeholder'=>'Description' ,'name' => 'description']) !!}
            {!! Form::submit('Submit',$attributes=['class'=>'button'])!!}
        {!! Form::close() !!}
    </div>
</div>
@stop
