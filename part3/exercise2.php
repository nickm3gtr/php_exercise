<?php

$tableArray = array();
$sortedTableArray = array();

// generate random numbers and populate table
for ($i = 0; $i < 4; $i++) {
  $previousNumbers = array();
  for ($j = 0; $j < 4; $j++) {
    do {
      $randNumber = rand(1, 100);
    } while (in_array($randNumber, $previousNumbers));
    $tableArray[$i][$j] = $randNumber;
    array_push($previousNumbers, $randNumber);
  }
}

// sort numbers for each row
$sortedTableArray = $tableArray;
for ($i = 0; $i < sizeof($tableArray); $i++) {
  sort($sortedTableArray[$i], SORT_NUMERIC);
}

// sum up numbers for each column
$sumArray = array();
for ($i = 0; $i < sizeof($sortedTableArray); $i++) {
  $sumArray[$i] = 0;
  for ($j = 0; $j < sizeof($sortedTableArray); $j++) {
    $sumArray[$i] = $sumArray[$i] + $sortedTableArray[$j][$i];
  }
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 3 - Exercise 2 MANIPULATE MULTI-DIMENSIONAL ARRAY
  </div>
  <div class="card-body">
    <table class="table table-bordered mb-3">
      <?php
      for ($i = 0; $i < sizeof($tableArray); $i++) {
        print '<tr>';
        for ($j = 0; $j < sizeof($tableArray[$i]); $j++) {
          print '<td>' . $tableArray[$i][$j] . '</td>';
        }
        print '</tr>';
      }
      ?>
    </table>
    <table class="table table-bordered mb-3">
      <?php
      for ($i = 0; $i < sizeof($sortedTableArray); $i++) {
        print '<tr>';
        for ($j = 0; $j < sizeof($sortedTableArray[$i]); $j++) {
          print '<td>' . $sortedTableArray[$i][$j] . '</td>';
        }
        print '</tr>';
      }
      ?>
      <tr>
        <?php
        for ($i = 0; $i < sizeof($sumArray); $i++) {
          print '<td>' . $sumArray[$i] . '</td>';
        }
        ?>
      </tr>
    </table>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>