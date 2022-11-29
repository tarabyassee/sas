<?php require_once('../../private/initialize.php');?>

<?php $pageTitle = 'Create a Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>


  <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <label for="name">Salamander Name</label>
    <input type="text" name="name" value=""><br>

    <label for="habitat">Habitat</label><br>
    <textarea id="habitat" name="habitat" rows="4" cols="50"></textarea><br>

    <label for="description">Description</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Create Salamander">

  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
