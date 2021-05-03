<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $username = $_POST["username"];
  $content = $_POST["content"];

?>

<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
  /* check connection */
    if ($mysqli->connect_errno)
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $user_id = $_POST["user_id"];
    $content = $_POST["content"];
    $my_query = "SELECT * FROM User WHERE user_id = '$user_id'";
    $result = mysqli_query($mysqli, $my_query);
    $row_num = mysqli_num_rows($result);
    if($row_num == 1)
    {
    	if($content == '')
    	{
    		echo "Error !";
    	}
    	else
    	{
    		$query = "INSERT INTO Post (author_id, content) VALUES ('$user_id', '$content')";
    		if($mysqli->query($query) === TRUE)
    		{
    			echo "Successd !!";
    		}
    		else
    		{
    			echo "Error !";
    		}
    	}
    }
    else
    {
    	echo "Error: User_id does not exist";
    }
    /* close connection */
    $mysqli->close();
  /* close connection */
  $mysqli->close();
?>
