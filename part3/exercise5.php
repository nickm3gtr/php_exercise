<?php

function bubbleSort($lists)
{
  $length = count($lists);

  for ($parent = 0; $parent < $length; $parent++) {
    for ($child = 0; $child < $length - $parent - 1; $child++) {
      if ($lists[$child] > $lists[$child + 1]) {
        $temp =  $lists[$child];
        $lists[$child] = $lists[$child + 1];
        $lists[$child + 1] = $temp;
      }
    }
  }
  return $lists;
}
$given = [5, 1, 4, 2, 8];
$lists = $given;
bubbleSort($lists);
?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 5 FIX BUBBLESORT
  </div>
  <div class="card-body">
    Given numbers:
    <?php
    foreach ($given as $value) {
      print $value;
    }
    ?>
    <br />
    Output:
    <?php
    foreach (bubbleSort($lists) as $value) {
      print $value;
    }
    ?>
    <br />
    <p>Explanation: </p>
    <p>The $temp value of the code was wrong. It should contain $lists[$child] not $lists[$child +1] because it will duplicate some numbers, and one value will be missing because the value of $lists[$child] was not stored in a variable.</p>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>