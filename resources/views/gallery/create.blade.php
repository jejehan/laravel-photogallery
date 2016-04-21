@extends('layouts.main')

@section('content')
<div class="row small-up-2 medium-up-12 large-up-12">
    <div class="column">
        <h5>Create Gallery</h5>

        {!! Form::open(array( 'action' => 'GalleryController@store', 'enctype' => 'multipart/form-data' )) !!}
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Gallery Name', 'name' => 'name']  ) !!}
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Description', 'name' => 'description']  ) !!}
            {!! Form::label('cover_image', 'Cover Image') !!}
            {!! Form::file('cover_image') !!}
            {!! Form::submit('Submit', $attributes = ['class' => 'button']) !!}

        {!! Form::close() !!}

    </div>
</div>
@stop
