<?php

session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 2 - Exercise 5 SHOW REFRESH COUNT
  </div>
  <div class="card-body">
    <?php echo 'refresh count: ' . $_SESSION['count']; ?>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>