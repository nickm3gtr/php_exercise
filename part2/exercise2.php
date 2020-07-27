<?php
function createPattern($n)
{

  for ($i = $n; $i > 0; $i--) {
    echo '&nbsp';
    for ($j = 1; $j <= $n - $i; $j++) {
      echo '&nbsp';
    }
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
      if ($j == 1 || $j == $i * 2 - 1) {
        echo '*';
      } else {
        echo '&nbsp';
      }
    }
    echo "<br />";
  }

  for ($i = 1; $i <= $n; $i++) {
    echo '&nbsp';
    for ($j = 1; $j <= $n - $i; $j++) {
      echo '&nbsp';
    }
    for ($j = 1; $j <= $i * 2; $j++) {
      if ($j == 1 || $j == $i * 2 - 1) {
        echo '*';
      } else {
        echo '&nbsp';
      }
    }
    echo "<br />";
  }
}
?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 2 DRAW PATTERN
  </div>
  <div class="card-body">
    <?php echo createPattern(10); ?>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>