<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 1
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Program receives a user input and evaluate the value if even or odd.
    </p>

    <form action="exercise1_result.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="number" placeholder="Enter number">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>