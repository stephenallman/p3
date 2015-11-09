@extends('layouts.master')


@section('head')
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
   <link href="/css/jumbotron-narrow.css" rel="stylesheet">


@section('title')
    <title>Generate Users</title>
@stop

@section('content')
      

       <form method="POST" action="/user">

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

   		
    		<p class = "paragraphs">
				<h2>Select the Quantity of Random Users</h2>
    		</p>
        <p>
	     <select  name= "number" type = "number">
      	<optgroup><label></label>
    	   	 <option value = "1">1</option>
       		 <option value = "2">2</option>
       		 <option value = "3">3</option>
           <option value = "4">4</option>
           <option value = "5">5</option>
    	   </optgroup>
        </select>
        </p>
  
          <p>
          <button type="submit" class="btn btn-primary">Generate Random Users</button>
          </p>
  
    </form>
    
   @stop

  @section('scripts')

    <script src="/js/jquery-1.11.2.min.js"></script> 
    <script src="/js/bootstrap.min.js"></script>
  @stop


 
