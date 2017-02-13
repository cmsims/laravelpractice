
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/3/17
 * Time: 4:11 PM
 */

@extends('layouts.default')


@section('content')
 <h2>Create Todos for Project "{{ $project->name }}"</h2>

 {!! Form::model(new App\Todo, ['route' => ['projects.todos.store', $project->slug], 'class'=>'']) !!}
 @include('pages.todos.partials._form', ['submit_text' => 'Create Todo'])
 {!! Form::close() !!}
@endsection
