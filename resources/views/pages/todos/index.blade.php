
@extends('layouts.default')
@section('content')
    <h2>
        {!! link_to_route('projects.show', $projects->name, [$projects->slug]) !!} -
        {{ $todos->name }}
    </h2>

    {{ $todos->description }}
    <!-- TODO: Current Tasks -->
@stop