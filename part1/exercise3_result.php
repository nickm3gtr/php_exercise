<?php

$value = '';
$resultMessage = '';

if (!empty($_POST['value'])) {
  $value = strtolower($_POST['value']);

  $resultMessage = checkPalindrome($value);
} else {
  $resultMessage = 'Please input a string!';
}

function checkPalindrome($value)
{
  if ($value == strrev($value)) {
    return 'Palindrome';
  } else {
    return 'Not palindrome';
  }
}
?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 3 input result
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      <?php echo $resultMessage; ?>
    </p>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>