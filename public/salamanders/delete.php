<?php require_once('../../private/initialize.php');?> 

<?php
if (!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];

$salamander = find_salamander_by_id($id);

if(is_post_request()) {

}
?>

<?php $page_title = 'Delete Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <h1>Delete Salamander</h1>

   <form action="<?= url_for('salamanders/delete.php?id'. h(u($id))); ?>" method="post">
    <label for="name">Salamander Name</label>
    <input type="text" name="name" value="<?= h($salamander['name']); ?>"><br>

    <label for="habitat">Habitat</label>
    <input id="habitat" rows="4" cols="50" name="habitat" value="<?= h($salamander['habitat']); ?>"></input><br>

    <label for="description">Description</label>
    <input id="description" rows="4" cols="50" name="description" value="<?= h($salamander['description']); ?>"></input><br>

    <input type="submit" value="Edit Salamander">

  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
