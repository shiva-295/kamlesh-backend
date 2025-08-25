<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php
  $emailer = $pasder = "";
  $email = $pass = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["email"] == "") {
      $emailer = "Email is required!";
    } else { 
      $email = $_POST['email'];
    }
    if ($_POST['pswd'] == "") {
      $pasder = "Password is required!";
    } else {
      $pasd = $_POST["pswd"];
    }
  }
  ?>


  <div class="container mt-3">
    <h2>Stacked form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <p class="text-danger"><?php echo $emailer ?></p>
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        <p class="text-danger"><?php echo $pasder ?></p>
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <p>Email: <?php echo $email; ?></p>
    <p>Password: <?php echo $pasd ?></p>
  </div>

</body>

</html>