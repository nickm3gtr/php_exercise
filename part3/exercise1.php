<?php

$lettersArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k'];

function generateRandomLetter($lettersArray)
{
  $randomNumber = rand(0, 10);
  $randomLetter = '';
  if ($randomNumber % 2 == 0) {
    $randomLetter = strtoupper($lettersArray[$randomNumber]);
  } else {
    $randomLetter = strtolower($lettersArray[$randomNumber]);
  }
  echo $randomLetter;
}


?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 3 - Exercise 1 GENERATE RANDOM CHARACTERS IN THE GRID
  </div>
  <div class="card-body">
    <table class="table table-bordered mb-3">
      <tr>
        <?php
        foreach ($lettersArray as $letter) {
          print "<td>" . $letter . "</td>";
        }
        ?>
      </tr>
      <tr>
        <?php
        for ($i = 0; $i < sizeof($lettersArray); $i++) {
          print "<td>" . $i . "</td>";
        }
        ?>
      </tr>
    </table>
    <table class="table table-bordered mb-3">
      <tr>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
      </tr>
      <tr>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
      </tr>
      <tr>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
      </tr>
      <tr>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
        <td><?php generateRandomLetter($lettersArray) ?></td>
      </tr>
    </table>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>