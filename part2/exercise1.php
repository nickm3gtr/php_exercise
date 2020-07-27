<?php

function createAsterisks($number)
{
  for ($i = 0; $i <= $number; $i++) {
    for ($j = 0; $j < $number - $i; $j++) {
      echo '&nbsp';
    }
    for ($j = 0; $j < $i; $j++) {
      echo '*';
    }
    echo '<br />';
  }
  for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
      if ($i < $j) {
        echo '*';
      } else {
        echo '&nbsp';
      }
    }
    echo '<br />';
  }
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 1 DRAW PATTERN
  </div>
  <div class="card-body">
    <?php echo createAsterisks(4); ?>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>