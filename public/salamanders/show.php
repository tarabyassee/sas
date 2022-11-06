<?php require_once('../../private/initialize.php'); 

$page_title = 'Salamander Details';

include(SHARED_PATH . '/salamander-header.php');

$id = $_GET['id'] ?? '1'; 

?>

<h2>Salamander Details</h2>

<?= 'Page ID: ' . h($id); ?>

<p><a href="<?= url_for('/salamanders/index.php');?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
