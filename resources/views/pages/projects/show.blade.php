
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/3/17
 * Time: 4:19 PM
 */

@extends('layouts.default')

@section('content')
    <h2>{{ $project->name }}</h2>

    @if ( !$project->todos->count() )
        Your project has no todos.
    @else
        <ul>
            @foreach( $project->todos as $todo)
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.todos.destroy', $project->slug, $todo->slug))) !!}
                    <a href="{{ route('projects.todos.show', [$project->slug, $todo->slug]) }}">{{ $todo->name }}</a>
                    (
                    {!! link_to_route('projects.todos.edit', 'Edit', array($project->slug, $todo->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
        {!! link_to_route('projects.todos.create', 'Create Todo', $project->slug) !!}
    </p>
@endsection