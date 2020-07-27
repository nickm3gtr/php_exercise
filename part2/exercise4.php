<?php
$numbersArray = [5, 4, 3, 2, 1];

function moveFirstToLast($numbersArray)
{
  $newNumbersArray = $numbersArray;

  foreach ($newNumbersArray as $val) {
    echo $val;
  }
  echo '<br />';

  // loop to transfer first index to last
  for ($i = 0; $i < sizeof($numbersArray); $i++) {

    $firstIndexValue = array_shift($newNumbersArray);
    array_push($newNumbersArray, $firstIndexValue);
    // display numbers
    for ($h = 0; $h < sizeof($newNumbersArray); $h++) {
      echo $newNumbersArray[$h];
    }
    echo "<br />";
  }
}


?>


<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 4 CREATE PATTERN
  </div>
  <div class="card-body">
    <?php
    moveFirstToLast($numbersArray);
    ?>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>