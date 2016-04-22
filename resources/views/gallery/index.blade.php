@extends('layouts.main')

@section('content')

<div class="callout primary">
    <div class="row column">
        <h1>Hello! This is the portfolio of a very witty person.</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
    </div>
</div>

<div class="row small-up-2 medium-up-3 large-up-4">
    <?php foreach ($galeries as $gallery): ?>
        <div class="column">

            <a href="/gallery/show/{{ $gallery->id }}">
                <img class="thumbnail" src="/images/{{ $gallery->cover_image }}">
            </a>

            <h5> {{ $gallery->name }} </h5>
            <p>
                {{ $gallery->description }}
            </p>
        </div>
    <?php endforeach; ?>
</div>
@stop
