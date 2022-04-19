<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
  ?>
  <title>Book Now <?php echo $title; ?></title>
</head>

<body>
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php";
  ?>
  <main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/salon.detail.php" ?>
  </main> 
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php";
  ?>
</body>

</html>