<?php require_once('../../private/initialize.php');?> 

<?php
if (!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];

$salamander = find_salamander_by_id($id);

if(is_post_request()) {
  $sql = "DELETE FROM salamander ";
  $sql .= "WHERE id='" . $id . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  if($result) {
    redirect_to(url_for('/salamanders/index.php'));
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}
?>

<?php $page_title = 'Delete Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <h1>Delete Salamander</h1>
  <p>Are you sure you want to delete this salamander?</p>
  <p><?= h($salamander['name']); ?> </p>

   <form action="<?= url_for('salamanders/delete.php?id='. h(u($id))); ?>" method="post">

    <input type="submit" value="Delete Salamander">

  </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
