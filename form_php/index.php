<?php
// Access the page by:
// http://localhost:8000/?author=HarperLee&title=To Kill a Mockingbird.
// or:
// http://localhost:8000/?author=HarperLee&title=To%20Kill%20a%20Mockingbird
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bookstore</title>
  </head>
  <body>
    <!-- $_COOKIE is special global variable called superglobal
    Other supberglobals are:
    $_GET
    $_POST
    $_SERVER
    $_ENV
    -->
    <p>
      <?php
        if(isset($_COOKIE['username'])) {
          echo "You are " . $_COOKIE['username'];
        } else {
          echo "You are not authenticated.";
        }
      ?>
    </p>

    <?php
    if(!(isset($_GET['title']) && isset($_GET['author']))) {
    ?>
    <p>You are looking for a book?</p>
    <?php
    } else {
    ?>
      <p>The book you are looking for is</p>
      <ul>
        <!-- $_GET is an associative array that contains the parameters
             of the query string.
        -->
        <li> <strong>Title</strong>: <?php echo $_GET['title']; ?> </li>
        <li> <strong>Author</strong>: <?php echo $_GET['author']; ?> </li>
      </ul>
    <?php
    }
    ?>
  </body>
</html>
