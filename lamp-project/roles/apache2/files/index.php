<?php
$user = "root";
$password = "root";
$database = "lampdb";
$table = "Teammate";
$servername = "localhost";

  $db = new mysqli($servername, $user, $password);
  echo "<h2>TODO</h2><ol>"; 
  foreach($db->query("SELECT * FROM lampdb.Teammate") as $row) {
    echo "<li>" . $row["firstname"] . " " . $row["email"] . " " . $row["color"] . " " . $row["age"] . "</li>";
  }
  echo "</ol>";

  $db->close();