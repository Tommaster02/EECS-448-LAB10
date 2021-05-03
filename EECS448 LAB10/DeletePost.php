<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $delete = $_POST["checkbox"];
  foreach($delete as $value)
  {
  	$query = "DELETE FROM Post WHERE post_id = '$value'";
  	if($mysqli->query($query) === TRUE)
  	{
  		echo "<br>"."the post: " .$value. " is deleted."."<br>";
  	}
  	else
  	{
  		echo "Error !!";
  	}
  }
  /* close connection */
  $mysqli->close();
?>
