
<?php
//first we have to import the database connection 
 require_once('database.php');

 if (isset($_POST['submit'])) 
 {
  	$catagory = $_POST['catagory'];
  	//echo $catagory;
  		if ($catagory=="patient") 
  		{
  			header("location:first.php");
  		}
  		if ($catagory!="patient") 
  		{
  			$name = $_POST['name'];
  			$password = $_POST['password'];
  				if (!empty($name && $password)) {
    			//insert the sql quary 
    			$sub_quary = "SELECT * FROM doctor WHERE name='$name' and password='$password'";
    			//we create the quary string now time to exeute
    			$sub_result = mysqli_query($conn,$sub_quary);
    			if (!empty($sub_result)) {
     		 	while($row = mysqli_fetch_array($sub_result)){
    			$namedb = $row['name'];
    			$passworddb = $row['password'];
    				if ($name==$namedb && $password==$passworddb) {
    					header("location:success.php");
    			}
    			else{
    				header("location:failed.php");	
    			}
    			
}
    								}

    											}
  		}
  	}

  	

  


  //now check if the user left the empty fild
  //we use javascript to stop this but this is the 
  //second line of defence




?>














<!DOCTYPE html>
<html>	
<head>
<title>
Edu project
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<!-- importing bootstrap
-->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<!--//webfonts-->

</head>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="#">
    <img src="bird.jpg" alt="Logo" style="width:40px;">
  </a>
  <button onclick="window.location.href='appoinment.php'" class="btn btn-danger navbar-btn">See The Appointment List </button>
  ...
</nav> 
<body id="LoginForm">

<div class="container">
<h1><b><font color="white">Login Form</b></h1>
<div class="login-form">
<div class="main-div">
    

  
   </div>
   <form action="login.php" method="POST">



    	<div class="styled-input">
								<select name ="catagory" id="category2" required="">
									<option value="catagory" >Are you a doctor or patient??</option>
									<option value="patient">patient</option>
									<option value="Pathology">Pathology Doctor</option>
									<option value="Neurology">Neurology Doctor</option>
									<option value="Psychology">Psychology Doctor</option>
									<option value="Emergency">Emergency Doctor</option>
									<option value="Urology">Urology Doctor</option>
								</select>
								<span></span>
							</div>

        <div class="form-group">

        <h3> <b>Enter Name(if you are a Doctor)</b></h3>
            <input type="text" class="form-control" name="name" placeholder="Name (if you are a Doctor)">

        </div>
       

        <div class="form-group">

        <h3> <b>Enter Password(if you are a Doctor)</b></h3>
            <input type="password" class="form-control" name="password" placeholder="Enter Password if you are a Doctor">

        
        </font>
</div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block btn btn-success" value="submit">Login</button>

    </form>
    </div>
</div></div></div>
</body>				
				
			
					
 	
	<!--tabs-->	
<script src="js/jquery.min.js"></script>
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->
</body>
</html>