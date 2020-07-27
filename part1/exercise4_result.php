<?php

$value = '';
$resultMessage = '';

function switchCase($value)
{
  $newStr = '';
  $length = strlen($value);
  for ($i = 0; $i < $length; $i++) {
    if ($value[$i] >= 'A' && $value[$i] <= 'Z') {
      $newStr .= strtolower($value[$i]);
    } else if ($value[$i] >= 'a' && $value[$i] <= 'z') {
      $newStr .= strtoupper($value[$i]);
    } else {
      $newStr .= $value[$i];
    }
  }
  return strrev($newStr);
}

if (!empty($_POST['value'])) {
  $value = $_POST['value'];
  $resultMessage = $value . ' = ' . switchCase($value);
} else {
  $resultMessage = 'Invalid input!';
}
?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 4 input result
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      <?php echo $resultMessage; ?>
    </p>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>