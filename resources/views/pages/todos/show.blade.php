
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/3/17
 * Time: 4:19 PM
 */

@extends('layouts.default')

@section('content')
    <h2>
        {!! link_to_route('projects.show', $projects->name, [$projects->slug]) !!} -
        {{ $todos->name }}
    </h2>

    {{ $todos->description }}
@endsection