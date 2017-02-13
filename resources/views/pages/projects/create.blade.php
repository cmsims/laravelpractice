
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/3/17
 * Time: 4:11 PM
 */

@extends('layouts.default')

@section('content')
 <h2>Create Project</h2>

 {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
 @include('pages.projects.partials._form', ['submit_text' => 'Create Project'])
 {!! Form::close() !!}
@endsection

