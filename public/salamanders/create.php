<?php
require_once('../../private/initialize.php');?>

<?php
if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "Salamander name: " . $salamanderName . "<br>";
} else {
  redirect_to(url_for('/salamanders/new.php'));
}
?>