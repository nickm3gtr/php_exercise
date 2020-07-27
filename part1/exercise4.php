<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 4
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Program receives a string input ,then reverse the case value and arrangement
    </p>

    <form action="exercise4_result.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="value" placeholder="Enter string">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>