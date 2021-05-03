<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $user_id = $_POST['user_ids'];
  $query = "SELECT content FROM Post WHERE author_id = '$user_id'";

  if ($result = $mysqli->query($query))
  {
    echo "<table>";
    echo "List of Posts for user ". $user_id .":<br>";
    while ($row = $result->fetch_assoc())
    {
      echo "<tr>";
       echo "<td>";
        echo $row["content"];
       echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
    $result->free();
  }
/* close connection */
$mysqli->close();
?>
