
 <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href"../>Home</a></li>
            <li role="presentation"><a href="../public/AboutP3.pdf">About</a></li>
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
<script src="../../../public/js/jquery-1.11.2.min.js"></script> 
<script src="../../../public/js/bootstrap.min.js"></script>
</body>