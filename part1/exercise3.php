<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 3
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Program receives a string input and evaluates the value if it’s a valid palindrome or not
    </p>

    <form action="exercise3_result.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="value" placeholder="Enter string">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>