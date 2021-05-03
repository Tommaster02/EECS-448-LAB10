<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hutang", "Phaeph4e", "hutang");
  /* check connection */
  if ($mysqli->connect_errno)
  {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $query = "SELECT user_id FROM User ORDER BY user_id ASC";

  if ($result = $mysqli->query($query))
  {
      /* fetch associative array */
      echo "<table>";
      echo "List of User: ";
      while ($row = $result->fetch_assoc())
      {
        echo "<tr>";
      	 echo "<td>";
          echo $row["user_id"];
         echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
      /* free result set */
      $result->free();
  }
  /* close connection */
  $mysqli->close();
?>
