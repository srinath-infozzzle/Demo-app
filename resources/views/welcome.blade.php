@extends('layouts.app')

@section('content')
{!! Form::open(['action'=>'PagesController@result']) !!}
    {{Form::label("name","Name")}}
    {{Form::text("name","",['class'=>"name"])}}
    {{Form::submit('Click Me!')}}
{!! Form::close() !!}
    @endsection
    