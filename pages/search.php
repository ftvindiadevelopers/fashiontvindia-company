<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
  ?>
  <title>Search <?php echo $title; ?></title>
</head>

<body>
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php";
  ?>
  <main>
    <?php 
    foreach ($_GET["date"] as $date => $value) {
      echo $value . "<br>";
    }
    foreach ($_GET["verticals"] as $vertical => $value) {
      # code...
      echo $value . "<br>";
    }
    ?>
  </main> 
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php";
  ?>
</body>

</html>