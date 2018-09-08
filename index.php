<?php
// Connecting database
include_once "includes/dbh.inc.php"
?>
<!-- HTML Document -->
<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

  <body>
<!-- SQL Query -->
<?php
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$result_check = mysqli_num_rows($result);

if ($result_check>0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['user_email'] . " " . $row['user_pwd'] . "<br>";
  }

  
}
?>


  </body>

</html>
