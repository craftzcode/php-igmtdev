<?php

require('user_validator.php');

if (isset($_POST['submit'])) {
  // echo "form submitted";

  // NOTE: ($_POST) to pass the (name of input) to the (UserValidator)
  $validation = new UserValidator($_POST);
  $errors = $validation->validateForm();
}

?>

<html lang="en">

<head>
  <title>PHP OOP</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <div class="new-user">
    <h2>Create new user</h2>
    <form action="" method="POST">
      <label>Username:</label>
      <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
      <div class="error">
        <?php echo $errors['username'] ?? '' ?>
      </div>

      <label>Email:</label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
      <div class="error">
        <?php echo $errors['email'] ?? '' ?>
      </div>

      <input type="submit" value="submit" name="submit">
    </form>

  </div>
</body>

</html>
