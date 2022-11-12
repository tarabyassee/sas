<?php
require_once('../../private/initialize.php');?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<?php
if(is_post_request()) {

  $salamanderName = $_POST['salamanderName'] ?? '';

  echo "Form parameters<br>";
  echo "Menu name: " . $salamanderName . "<br>";
} else {
  redirect_to(url_for('/salamanders/new.php'));
}
?>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>