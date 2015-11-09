@extends('layouts.master')


@section('head')
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
   <link href="/css/jumbotron-narrow.css" rel="stylesheet">


@section('title')
    <title>Generate Users</title>
@stop


  @section('content')  

    @foreach ($user as $user)
      
        @foreach ($user as $key => $value)
        <p>  {{ $key }}: {{ $value }}</p>
       @endforeach
       <<br>
    @endforeach
  
    
   @stop






