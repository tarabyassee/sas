<?php require_once('../../private/initialize.php');?> 

<?php
if (!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}

$id = $_GET['id'];
$salamanderName = '';

if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "Salamander name: " . $salamanderName . "<br>";
}
?>

<?php $pageTitle = 'Stub - Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

  <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <h1>Edit Salamander</h1>

  <form action="<?= url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="salamanderName">Salamander Name</label><br>
    <input type="text" name="salamanderName" value="<?= $salamanderName; ?>" >
    <input type="submit" value="Edit Salamander" >
   </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
