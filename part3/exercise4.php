<?php
session_start();
if (!isset($_SESSION['queue'])) {
  $_SESSION['queue'] = array();
} else {
  $_SESSION['queue'] = $_SESSION['queue'];
}

if (isset($_POST['number'])) {
  $number = $_POST['number'];
  if (!is_numeric($number)) {
  } else {
    pushStack($number, $_SESSION['queue']);
  }
}

if (isset($_POST['pop'])) {
  popStack($_SESSION['queue']);
}


function pushStack($val)
{
  $_SESSION['queue'][] = $val;
  unset($_POST['number']);
}

function popStack()
{
  $newArray = array();
  for ($i = 1; $i < (sizeof($_SESSION['queue'])); $i++) {
    $newArray[] = $_SESSION['queue'][$i];
  }
  $_SESSION['queue'] = $newArray;
  unset($_POST['pop']);
}

?>

<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    PART 3 Exercise 4 QUEUE
  </div>
  <div class="card-body">

    <form method="POST">
      <div class="form-group mb-3">
        <input type="text" class="form-control" name="number" placeholder="Enter number to push to the queue">
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
      <tr>
        <?php
        for ($i = 0; $i < sizeof($_SESSION['queue']); $i++) {
          print '<td class="text-center">' . $_SESSION['queue'][$i] . '</td>';
        }
        ?>
      </tr>
    </table>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>