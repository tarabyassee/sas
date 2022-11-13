<?php require_once('../../private/initialize.php');

  $subject_set = find_all_salamander();
  
//$salamanders = [ 
  //             ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    //           ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
      //         ['id' => '3', 'salamanderName' => 'Zigzag Salamander'],
        //       ['id' => '4', 'salamanderName' => 'Slimy Salamander'],
//];

$pageTitle = 'Salamanders';
  include_once(SHARED_PATH . '/salamander-header.php');
?>

  <h1>Main Page - Salamanders</h1>

  <a href="<?php echo url_for('/salamanders/new.php'); ?>">Create Salamander</a>

  <table>
    <caption>Get to know our incredible salamanders</caption>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Habitat</th>
      <th scope="col">Description</th>
      <th colspan=3 scope="col">Actions</th>
    </tr>

    <?php while($salamander= mysqli_fetch_assoc($subject_set)) { ?>
    <tr>
      <td><?= h($salamander['id']); ?> </td>
    	<td><?= h($salamander['name']); ?> </td>
      <td><?= h($salamander['habitat']); ?> </td>
      <td><?= h($salamander['description']); ?> </td>
      <td><a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
      <td><a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
      <td><a href="">Delete</a></td>
    </tr>
    <?php } ?>
  </table>

  <?php 
      mysqli_free_result($subject_set);
    ?>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
