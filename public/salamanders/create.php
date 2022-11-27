<?php
require_once('../../private/initialize.php');?>

<?php
if(is_post_request()) {
  $name = $_POST['name'] ?? '';
  $description = $_POST['description'] ?? '';
  $habitat = $_POST['habitat'] ?? '';

  $result = insert_subject($name, $habitat, $description);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('salamanders/show.php?id=' . $new_id));

} else {
  redirect_to(url_for('/salamanders/new.php'));
}
?>