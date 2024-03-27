<?php
if (isset($_GET['username'])) echo $_GET['username']; 
echo '<br>';
if (isset($_POST['alias'])) echo $_POST['alias'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="GET">
    <fieldset>
      <input type="text" name="username">
      <input type="submit" value="Click to Get">
      <!-- You can combine html with php -->
      <?php
      if (isset($_GET['username'])) echo $_GET['username'];
      ?>
    </fieldset>
  </form>
  <form method="POST">
    <fieldset>
      <input type="text" name="alias">
      <input type="submit" value="Click to Post">
      <?php
      if (isset($_POST['alias'])) echo $_POST['alias'];
      ?>
    </fieldset>
  </form>
</body>

</html>