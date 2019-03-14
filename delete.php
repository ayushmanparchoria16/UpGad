<?php
include ('dbcon.php');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$id= $_GET['id'];
$sql = "DELETE FROM `subscribers` WHERE `id`='$id'";
 mysqli_query($con, $sql);
 
?>
<script>
alert(" deleted successfully");
  window.location.href = "index.php";
</script>
  </body>
  </html>