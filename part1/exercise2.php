<?php include('../layouts/header.php'); ?>

<div class="card">
  <div class="card-header text-center">
    Exercise 2
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Convert the score into percent form using 2 input variables
    </p>

    <form action="exercise2_result.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="score" placeholder="Enter your score">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="items" placeholder="Enter the number of items">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include('../layouts/footer.php'); ?>