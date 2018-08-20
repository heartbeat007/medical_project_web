
<?php 
  require_once('database.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>appoinment form</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


</head>
<body>





<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <div class="jumbotron">
        <h1><center><b>Appoinment List</b></center></h1>
        </div>

        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Name</th>
                    <th>Email</th>
                     <th>Phone</th>
                     <th>Catagory</th>
                     <th>Date</th>
                     <th>Meeting date</th>
                     <th>Meeting time</th>
                     <th>Doctor</th>
                   </thead>
    <tbody>
    
    <?php
    // first fetch all data from the database table
    $read_quary = mysqli_query($conn,"SELECT * FROM patient");
    $i=0;
    while ($rows = mysqli_fetch_assoc($read_quary)) {
      $i++;
    
    ?>



    <tr>
  <td><?php echo  $rows['id']?></td>
  <td><?php echo  $rows['name']?></td>
  <td><?php echo $rows['email'] ?></td>
  <td><?php echo $rows['phone'] ?></td>
  <td><?php echo $rows['catagory'] ?></td>
  <td><?php echo $rows['date'] ?></td>
  <td><?php echo $rows['meeting_date'] ?></td>
  <td><?php echo $rows['meeting_time'] ?></td>
  <!--td>
    <a href="update.php?update=<?php //echo $rows['id'];?>" class="btn btn-primary">Update</a>
    &nbsp&nbsp
    <a href="index.php?delete=<?php// echo $rows['id'];?>" class="btn btn-danger">Delete</a>
                      
  </td-->
</tr>
    

    <?php 
    }

    ?>    
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
  </div>
</div>



    
 
    <script type="text/javascript">
      

    $(document).ready(function(){
    $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });


    </script>




</body>
</html>
