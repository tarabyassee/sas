<?php

function find_all_salamander() {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY id ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
  }

function find_salamander_by_id($id) {
  global $db;
  $id = $_GET['id'] ?? '1';
  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);

  $salamander = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $salamander;
}

function validate_salamander($salamander) {
  $errors = [];

  // menu_name
  if(is_blank($salamander['name'])) {
    $errors[] = "Name cannot be blank.";
  } elseif(!has_length($salamander['name'], ['min' => 2, 'max' => 255])) {
    $errors[] = "Name must be between 2 and 255 characters.";
  }

  if(is_blank($salamander['habitat'])) {
    $errors[] = "Habitat cannot be blank.";
  }

  if(is_blank($salamander['description'])) {
    $errors[] = "Description cannot be blank.";
  }

  return $errors;
}

function insert_salamander($salamander) {
  global $db;

  $errors = validate_salamander($salamander);
  if(!empty($errors)) {
    return $errors;
  }

  $sql = "INSERT INTO salamander ";
  $sql .= "(name, habitat, description) ";
  $sql .= "VALUES (";
  $sql .="'" . $salamander['name'] . "',";
  $sql .="'" . $salamander['habitat'] . "',";
  $sql .="'" . $salamander['description'] . "'";
  $sql .=")";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}
  
function update_salamander($salamander) {
  global $db;

  $errors = validate_salamander($salamander);
  if(!empty($errors)) {
    return $errors;
  }

  $sql = "UPDATE salamander SET ";
  $sql .= "name='" . $salamander['name'] . "', ";
  $sql .= "habitat='" . $salamander['habitat'] . "', ";
  $sql .= "description='" . $salamander['description'] . "' ";
  $sql .= "WHERE id='" . $salamander['id'] . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

?>