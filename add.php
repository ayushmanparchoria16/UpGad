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

<body>
 <div class="jumbotron"><h2 class="text-center"> ADD SUBSCRIBER</h2></div>
<div class="container">
<a href="index.php"><button type="button" class="btn btn-success">back</button></a>

 <form action="add.php" method="post">
  <div class="form-group">
    <label for="name">Name </label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="number">Phone</label>
    <input type="number" class="form-control" name="number">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>


</body>
</html>
<?php
include ('dbcon.php');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $number=$_POST['number'];
  

$sql = "INSERT INTO `subscribers`( `name`, `number`) VALUES ('$name','$number')";
$run = mysqli_query($con, $sql);
if($run)
{?>
<script> 
alert("data inserted sucessfully again fill form to insert more");
</script>
<?php
}
else{
?>
<script> 
alert(" error");
</script>
<?php
}
}
?>