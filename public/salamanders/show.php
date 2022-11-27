<?php require_once('../../private/initialize.php');
$id = $_GET['id'] ?? '1';

$salamander = find_salamander_by_id($id);


$pageTitle = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');
?>

<?= 'Page ID: ' . h($id); ?>
<div>
  <p><a href="<?= url_for('/salamanders/index.php');?>">&laquo; Back to Salamander List</a></p>
  <h1>Salamander Name: <?php echo h($salamander['name']); ?> </h1>
</div>

<div>
  <dl>
    <dt>Salamander Name:</dt>
    <dd><?php echo h($salamander['name']); ?></dd>
  </dl>
  <dl>
    <dt>Habitat:</dt>
    <dd><?php echo h($salamander['habitat']); ?></dd>
  </dl>
  <dl>
    <dt>Description:</dt>
    <dd><?php echo h($salamander['description']); ?></dd>
  </dl>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
