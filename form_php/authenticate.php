<?php
setcookie('username', $_POST['username']);
// The array $_POST contains the parameters by POST.
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bookstore</title>
  </head>
  <body>
    <strong>Form submitted? <?php echo (int) $submitted; ?></strong>
    <strong>Your login info is:</strong>
    <br>
    <ul>
      <li>Username: <?php echo $_POST['username']; ?></li>
      <li>Password: <?php echo $_POST['password']; ?></li>
    </ul>
  </body>
</html>
