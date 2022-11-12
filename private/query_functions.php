<?php

function find_all_salamander() {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY id ASC";
  $result = mysqli_query($db, $sql);
  return $result;
  }
  
?>