@extends('layouts.default')


@section('content')
    <h2 class="text-center">Projects</h2>

    @if ( !$projects->count() )
        You have no projects
    @else
        <ul>
            @foreach( $projects as $project )
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $project->id }}" aria-expanded="false" >

                                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}

                                        {{ $project->name }}

                                        {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                                        {!! Form::close() !!}
                                    </a>
                                </h4>
                            </div>
                            <div id="{{ $project->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    {{ $project->todos }}
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </ul>
    @endif
    <div class="text-center">
        <button class="btn btn-default">
            {!! link_to_route('projects.create', 'Create Project') !!}
        </button>
    </div>


@endsection