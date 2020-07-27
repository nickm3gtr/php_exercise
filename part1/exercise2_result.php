<?php

$score = $_POST['score'];
$items = $_POST['items'];

$percentage = 0;
$resultMessage = '';

function validateInputs($score, $items)
{
  if (!is_numeric($score) || !is_numeric($items) || $items <= 0 || $score < 0) {
    return false;
  } else {
    return true;
  }
}

function determineGrade($percentage)
{
  if ($percentage >= 90) {
    return 'A';
  } elseif ($percentage >= 80) {
    return 'B';
  } elseif ($percentage >= 70) {
    return 'C';
  } elseif ($percentage >= 60) {
    return 'D';
  } elseif ($percentage >= 50) {
    return 'E';
  } elseif ($percentage < 50) {
    return 'F';
  }
}

// Set Result Message
if (validateInputs($score, $items)) {
  $percentage = ($score / $items) * 100;
  if (determineGrade($percentage) != 'F') {
    $resultMessage = $score . '/' . $items . ', ' . $percentage . '% with a grade of ' . determineGrade($percentage) . ', you pass!';
  } else {
    $resultMessage = $score . '/' . $items . ', ' . $percentage . '% with a grade of ' . determineGrade($percentage) . ', you failed!';
  }
} else {
  $resultMessage = 'Invalid inputs!';
}
?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 2 input result
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      <?php echo $resultMessage; ?>
    </p>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>