<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('title')
<title>P3 Stephen Allman</title>


<!-- Bootstrap -->
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
  <link href="/css/jumbotron-narrow.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

 <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href"/public">Home</a></li>
            <li role="presentation"><a href="/AboutP3.pdf">About</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Developer's Best Friend</h3>
      </div>

      <div class="jumbotron">
          <h1>The Lorem Ipsum Project</h1>
          <h2>Lorem ipsum dolor sit amet.</h2>
        
        
      </div>
       <hr/>
      
          @yield('content')
         
    
        <hr/>
      <div class="about">
        <p><a class="btn btn-lg btn-success" href="http://www.lipsum.com/" role="button">What is Ipsum Lorem?</a></p>
      </div>

      <hr/>


   <?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
   echo "Allman ";
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy; $thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
 ?>

<?php auto_copyright(2015);  // 2015 - Current ?>
        
      </div>
    </div>
  </div>
</footer>
@yield('scripts')
    <script src="../public/js/jquery-1.11.2.min.js"></script> 
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>