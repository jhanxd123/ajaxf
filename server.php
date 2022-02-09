<?php

  $db_name = "sample_db";
  $db_pass = "";
  $db_user = "root";
  $db = "localhost";

  $connection = mysqli_connect($db, $db_user, $db_pass, $db_name);

  $my_query = "SELECT fname FROM names";

  $result = mysqli_query($connection, $my_query);

  // echo $result;

  // print_r(mysqli_fetch_assoc($result));
  $all_names = array();

  while($names = mysqli_fetch_assoc($result)) {
    array_push($all_names ,array("name" => $names['fname']));
  }

  echo json_encode($all_names);


?>
