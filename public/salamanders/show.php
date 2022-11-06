<?php require_once('../../private/initialize.php'); 

$page_title = 'Salamander Details';

include(SHARED_PATH . '/salamander-header.php');

$id = $_GET['id'] ?? '1'; 

?>

<h2>Salamander Details</h2>
<?= 'Page ID: ' . h($id); ?>
<!------------------------------------------------------------------ 
1.
Display <p>Page ID: ... </p>
Replace the ... with PHP short tags and use h function found in the
functions folder. It is a shortcut the author created to represent 
the PHP functions htmlentities. Pass the $id to the h function.

Hint: h()

2.
This one is a little harder
Create a link that does the following
* Use the url_for function and pass it salamanders/index.php
* Add the &laquo; entity. 
* Make the link text "Back to Salamander List"
* Surround it with <p> tags to give it a little space
------------------------------------------------------------------>
<p><a href="<?= url_for('/salamanders/index.php');?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
