<?php

$enteredNumber = $_POST['number'];

$result = '';

if (is_numeric($enteredNumber)) {
  if ($enteredNumber % 2 == 0) {
    $result = $enteredNumber . ' = even';
  } else {
    $result = $enteredNumber . ' = odd';
  }
} else {
  $result = 'Please enter a valid number';
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 1 input result
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      <?php echo $result; ?>
    </p>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>