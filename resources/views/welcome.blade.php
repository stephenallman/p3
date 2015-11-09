
@extends('layouts.master')

@section('content')

<h1>Hello Brooklyn</h1>

<p>
TODOParrot is the ultimate productivity application for
tropically-minded users.
 </p>

 {{ Form::open(['route' => 'ipsum.store']) }}

 {{ Form::close() }}

@endsection