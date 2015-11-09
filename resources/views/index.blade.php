
@extends('layouts.master')

@section('title')
    <title>P3 Stephen Allman</title>
@stop

@section('head')
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
  <link href="/css/jumbotron-narrow.css" rel="stylesheet">

@stop

@section('body')

@section('content')
	
      <div class="choices">
        <p><a class="btn btn-lg btn-success" href="/ipsum" role="button">Create Ipsum Paragraphs</a></p>
        <p><a class="btn btn-lg btn-success" href="/user" role="button" >Create Random Users</a></p>
      </div>

@stop


    {{-- <script src=>"/js/bootstrap.min.js"</script> --}}
    {{-- <script src=>"/js/jquery-1.11.2.min.js"</script> --}}
   


@section('footer')

@stop

@stop
