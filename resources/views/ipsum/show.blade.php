
@extends('layouts.master')

@section('head')
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
   <link href="../../public/css/jumbotron-narrow.css" rel="stylesheet">


@section('title')
    <title>Ipsum Generated</title>
@stop

  @section('content')  
   
     @foreach($text as $text)
            <p>{ $text }}</p>
      @endforeach <br>
        
    
@stop

@section('scripts')

    <script src="../../public/js/jquery-1.11.2.min.js"></script> 
    <script src="../../public/js/bootstrap.min.js"></script>
@stop






