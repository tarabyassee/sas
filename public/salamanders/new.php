<?php require_once('../../private/initialize.php');?>

<?php $page_title = 'Create a Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create a Salamander</h1>
    <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamanderName" value=""></dd>
      </dl>
        <input type="submit" value="Create Salamander">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

