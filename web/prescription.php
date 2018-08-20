<?php
//first we have to import the database connection 
 require_once('database.php');

  //now fetch the data
 if (isset($_POST['submit'])) {
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $date_of_birth = $_POST['date'];

  //now check if the user left the empty fild
  //we use javascript to stop this but this is the 
  //second line of defence
  if (!empty($first_name && $last_name && $email && $date_of_birth)) {
    //insert the sql quary 
    $sub_quary = "INSERT INTO users(f_name,l_name,email,date) VALUES('$first_name','$last_name','$email','$date_of_birth')";
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






//this is the delete portion of the crud app
if (isset($_GET['delete'])) {
  $delete_id = $_GET['delete'];
  //echo $delete_id;
  $del_quary = "DELETE FROM users WHERE id='$delete_id'";
  $del_result = mysqli_query($conn,$del_quary);
  if ($del_result>0) {
    //echo "another success";
  }
}
?>









<!DOCTYPE html>
<html>
<head>
	<title>mu curdapp</title>
</head>
<!-- importing the bootstrap library and the jquary
library-->
<link href="css/custom.css" rel="stylesheet">
<script src="js/bootbox.min.js"></script>
<script src="js/myscript.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<body>
<!--we create anavebar from the bootstrap library -->


<div class="my-navbar">
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
</div>


<div class="my-centertext">
	
	<div class="jumbotron">
  <h1 class="display-4"><center>ONLINE PRESCRIPTION REPOSITORY<center></h1>
  <p class="lead"><center>
  	<font size="+3">
  	Create,Read,Delete and Update Database Record
  </p>
  </font>
</center>
  


<div class="my-form">


	<form action="" method="POST" class="needs-validation" novalidate>
  
<center>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" placeholder="First name" name="fname" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>





    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control"  placeholder="Last name" name="lname"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </center>
    
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email"  required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Date</label>
      <input type="text" class="form-control"  placeholder="Date" name="date"required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    
  <button type="submit" class="btn btn-primary btn-lg btn-block btn btn-success" name="submit" value="submit">Add Record</button>

</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>	
</center>
</div>





  <div class="my-table">
  
<table class="table">
  <thead >
    <tr class="alert-success">
      <th scope="col">S/N</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;

//first we fetch all the data
$read_quary = mysqli_query($conn,"SELECT * FROM users");

//then we fetch one row at a time from the 'read_quary'
while ($rows = mysqli_fetch_assoc($read_quary)) {
  $i++;


?>


<tr>
  
  <td><?php echo $i ?></td>
  <td><?php echo $rows['f_name']. "&nbsp;".$rows['l_name'] ?></td>
  <td><?php echo $rows['email'] ?></td>
  <td><?php echo $rows['date'] ?></td>
  <td>
    <a href="update.php?update=<?php echo $rows['id'];?>" class="btn btn-primary">Update</a>
    &nbsp&nbsp
    <a href="index.php?delete=<?php echo $rows['id'];?>" class="btn btn-danger">Delete</a>
                      
  </td>
</tr>
<?php } ?>    
  </tbody>
</table>

     </tbody>
</table>


</div>

</body>

</html>