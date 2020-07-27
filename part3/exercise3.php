<?php
session_start();
if (!isset($_SESSION['stack'])) {
  $_SESSION['stack'] = array();
} else {
  $_SESSION['stack'] = $_SESSION['stack'];
}

if (isset($_POST['number'])) {
  $number = $_POST['number'];
  if (!is_numeric($number)) {
  } else {
    pushStack($number, $_SESSION['stack']);
  }
}

if (isset($_POST['pop'])) {
  popStack($_SESSION['stack']);
}


function pushStack($val)
{
  $_SESSION['stack'][] = $val;
  unset($_POST['number']);
}

function popStack()
{
  $newArray = array();
  for ($i = 0; $i < (sizeof($_SESSION['stack']) - 1); $i++) {
    $newArray[] = $_SESSION['stack'][$i];
  }
  $_SESSION['stack'] = $newArray;
  unset($_POST['pop']);
}


?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 3 Exercise 3 STACK
  </div>
  <div class="card-body">

    <form method="POST">
      <div class="form-group mb-3">
        <input type="text" class="form-control" name="number" placeholder="Enter number to push to the stack">
      </div>
      <button type="submit" class="btn btn-primary">Push</button>
    </form>

    <form method="POST">
      <div class="form-group mb-3">
        <input type="hidden" name="pop" value="1" />
      </div>
      <button type="submit" class="btn btn-primary">Pop</button>
    </form>

    <table class="table table-bordered mb-3 mt-2">
      <?php
      for ($i = sizeof($_SESSION['stack']) - 1; $i >= 0; $i--) {
        print '<tr><td class="text-center">' . $_SESSION['stack'][$i] . '</td></tr>';
      }
      ?>
    </table>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>