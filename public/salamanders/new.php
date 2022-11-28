<?php require_once('../../private/initialize.php');?>

<?php $pageTitle = 'Create a Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>


  <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <label for="name">Salamander Name</label>
    <input type="text" name="name" value=""><br>

    <label for="habitat">Habitat</label>
    <input type="text" name="habitat" value=""><br>

    <label for="description">Description</label>
    <input type="text" name="description" value=""><br>

    <input type="submit" value="Create Salamander">

  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
