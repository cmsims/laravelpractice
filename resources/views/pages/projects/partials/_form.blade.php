
/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/6/17
 * Time: 10:27 AM
 */

<div class="form-group">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>