<?php

$GLOBALS['count'] = 0;

function recursiveNumberAscending($number)
{

  if ($GLOBALS['count'] <= $number) {
    $GLOBALS['count']++;
    // loop starting from 1 until the count value to display each iteration
    for ($i = 1; $i < $GLOBALS['count']; $i++) {
      echo $i;
    }
    echo '<br />';
    recursiveNumberAscending($number);
  }
  // Execute descending recursive number function if count is already equals the number
  recursiveNumberDescending($number);
}

function recursiveNumberDescending($number)
{
  if ($GLOBALS['count'] > 0) {
    $GLOBALS['count']--;
    // loop starting from 1 until the count value to display each iteration
    for ($i = 1; $i < $GLOBALS['count']; $i++) {
      echo $i;
    }
    echo '<br />';
    recursiveNumberDescending($number);
  }
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 3 CREATE PATTERN
  </div>
  <div class="card-body">
    <?php echo recursiveNumberAscending(5); ?>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>