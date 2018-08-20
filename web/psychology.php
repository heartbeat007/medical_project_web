<?php
//take the database
 require_once('database.php');
 session_start();



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
   
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <center>
    <br />
    <br />
    <br />
    <br />
    <main role="main" class="container">
      <h1 class="mt-5">WECOME DOCTOR <?php echo $_SESSION['doctorname'];  ?></h1>
      <p class="lead">
      

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
$read_quary = mysqli_query($conn,"SELECT * FROM patient WHERE catagory='psychology';");

//then we fetch one row at a time from the 'read_quary'
while ($rows = mysqli_fetch_assoc($read_quary)) {
  $i++;


?>


<tr>
  
  <td><?php echo $rows['id'] ?></td>
  <td><?php echo $rows['name']?></td>
  <td><?php echo $rows['email'] ?></td>
  <td><?php echo $rows['phone'] ?></td>
  <td>
    <a href="update.php?update=<?php echo $rows['id'];?>" class="btn btn-primary">Set time of Appoinment</a>
    &nbsp&nbsp
                      
  </td>
</tr>
<?php } ?>    
  </tbody>
</table>

     </tbody>
</table>


</div>


      </p>
      
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    </center>
  </body>
</html>
