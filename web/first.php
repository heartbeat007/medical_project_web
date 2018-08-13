<?php
//first we have to import the database connection 
 require_once('database.php');

 if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['radio'];
  $catagory = $_POST['catagory'];
  $date = $_POST['date'];
  $comment = $_POST['comment'];


  //now check if the user left the empty fild
  //we use javascript to stop this but this is the 
  //second line of defence
  if (!empty($name && $email && $phone && $gender && $catagory && $date && $comment)) {
    //insert the sql quary 
    $sub_quary = "INSERT INTO patient(name,email,phone,gender,catagory,date,comment) VALUES('$name','$email','$phone','$gender','$catagory','$date','$comment')";
    //we create the quary string now time to exeute
    $sub_result = mysqli_query($conn,$sub_quary);
    if ($sub_result>0) {
      $msg = "successfully added to database";
    }
    else{
      $msg="Submission failed";
    }
  }

}

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
<body>

 <h1><font color="white"><b>Medical Appointment Form</b></font></h1>
	<div class="container">
			<div class="w3-agileits-team-title"> 
				
				
			<div id="horizontalTab">
					<ul class=" resp-tabs-list">
					<li>
						<img src="images/tm1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tm2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tm3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tm4.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class=" resp-tabs-container">
					<div class="tab1">
						<div class="team-img-w3-agile">
						<img src="images/tm11.png" alt=" " class="img-responsive" />
						<h4>Lucas Jimenez</h4>
							<span>Neurologist</span>
							<p>expert in :xyz</p>
						</div>
						<div class=" team-Info-agileits">
						<div class=" register-form">
					<form action="first.php" method="POST" class="needs-validation" novalidate>
						<div class="fields-grid">
							
								<input type="text" name="name" placeholder="Patients Name" required=""> 
								<input type="email" name="email" placeholder="email" required="">
							<input type="text" name="phone" placeholder="Phone Number" required=""> 
							
							<div class="styled-input">
								<h2>Sex :</h2>
								  <input type="radio" name="radio" value="male"> Male
								  <input type="radio" name="radio" value="female"> Female
							</div>
							
							<div class="styled-input">
								<select name ="catagory" id="category2" required="">
									<option value="catagory" >Choose Catagory</option>
									<option value="Pathology">Pathology</option>
									<option value="Neurology">Neurology</option>
									<option value="Psychology">Psychology</option>
									<option value="Emergency">Emergency</option>
									<option value="Urology">Urology</option>
								</select>
								<span></span>
							</div>
							<div class="styled-input">
							      <input type="text" class="form-control"  placeholder="Date" name="date"required>
      <div class="invalid-feedback">
							</div>	
								<div class="content-wthree2">
									<div class="grid-w3layouts1">
										<div class="w3-agile1">
											<label class="rating">Taking any medications currently?<span>*</span></label>
											<ul>
												<li>
													<input type="radio" id="a-option" name="selector1">
													<label for="a-option">Yes </label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" id="b-option" name="selector1">
													<label for="b-option">No</label>
													<div class="check"><div class="inside"></div></div>
												</li>
											</ul>
												<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="styled-input">
							
									<textarea name="comment" placeholder="If Yes, Please List It"></textarea>
								</div>
								<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block btn btn-success" value="submit">Add Record</button>
						</div>
						
					</form>
						
				</div>	
												
						</div>
						<div class="clear"> </div>
					</div>
					
					
 	
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