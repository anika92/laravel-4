@extends('master')
@section('content')
<h1>URL Shortner </h1>
{{ Form::open(array('url' => 'test/auth')) }}
{{ Form::text('url') }}
{{ Form::submit('shorten') }}


{{ Form::close() }}
@stop
