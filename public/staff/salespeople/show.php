<?php
require_once('../../../private/initialize.php');
require_login();

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = $_GET['id'];
if($id == 1993) {
    $salesperson['first_name'] = 'secret';
    $salesperson['last_name'] = 'keeper';
    $salesperson['phone'] = 'XXX-XXX-XXXX';
    $salesperson['email'] = 'keeper@test.codepath';
}
else {
  $salespeople_result = find_salesperson_by_id($id);
  // No loop, only one result
  $salesperson = db_fetch_assoc($salespeople_result);
}

?>

<?php $page_title = 'Staff: Salesperson ' . $salesperson['first_name'] . " " . $salesperson['last_name']; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Salespeople List</a><br />

  <h1>Salesperson: <?php echo h($salesperson['first_name']) . " " . h($salesperson['last_name']); ?></h1>

  <?php
    echo "<table id=\"salesperson\">";
    echo "<tr>";
    echo "<td>Name: </td>";
    echo "<td>" . h($salesperson['first_name']). " " . h($salesperson['last_name']) . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Phone: </td>";
    echo "<td>" . h($salesperson['phone']) . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Email: </td>";
    echo "<td>" . h($salesperson['email']) . "</td>";
    echo "</tr>";
    if($id == 1993) {
          echo "the secret is: " . get_secret();
          echo "<br />";
          echo "</table>";
    }
    else {
      echo "</table>";

      db_free_result($salespeople_result);
    }
  ?>
  <br />
  <a href="edit.php?id=<?php echo h(u($salesperson['id'])); ?>">Edit</a><br />
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
