<!DOCTYPE html>
<html>
 <head>
     <title> phone directory application</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


 </head>

<body class="container">
 <div class="jumbotron"><h2 class="text-center"> Phone directory application</h2></div>
<div class="container">
  <a href="add.php"><button type="button" class="btn btn-success">ADD</button></a>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAME</th>
        <th>PHONE NO.</th>
        <th>option</th>
      </tr>
    </thead>
    <tbody>
    <?php
include ('dbcon.php');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `id`, `name`, `number` FROM `subscribers`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
       
	  ?>
       <div class="row">
  
   <table class="table table-striped table-responsive example">
  <tr>
     <td width="120" ><?php echo $row['name']; ?></td>
     <td width="120" ><?php echo $row['number']; ?></td>
     
     <td width="87"> <button class="btn btn-danger" onclick="myFunction(<?php echo $row['id'];?>) ">delete</button></td>
  </tr>
</table>

   
  </div>  
   
    <?php
    }
} else {
    echo "0 results";
}


?>

    </tbody>
  </table>
</div>

<script>
function myFunction(p) {
    
    if (confirm("delete record ?")) {
    
 window.location.href=("delete.php?id="+p);
	  
    } else {
      window.location.href = "students.php";
    }
    
}
</script>
</body>



</html>