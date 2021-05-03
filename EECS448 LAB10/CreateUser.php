<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
/* check connection */
  if ($mysqli->connect_errno)
  {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $user_id = $_POST["user_id"];
  if($user_id == '')
  {
  	echo "ERROR !";
  }
  else
  {
    $query = "INSERT INTO User (user_id) VALUES ('$user_id')";
    if($mysqli->query($query) === TRUE)
    {
    	echo "Successd !!";
    }
    else
    {
    	echo "ERROR !!";
    }
  }
/* close connection */
$mysqli->close();
?>
