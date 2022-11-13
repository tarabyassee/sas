<?php require_once('../../private/initialize.php');

if (is_post_request()) {
  $salamanderName = $_POST['salamanderName'];
  echo "Salamander name:  $salamanderName";
}
?>

<?php $pageTitle = 'Create a Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
  <h1> Stub - Create a Salamander</h1>

  <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <label for="salamanderName">Salamander Name</label>
    <input type="text" name="salamanderName"><br>
    <input type="submit" value="Create Salamander">
  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
