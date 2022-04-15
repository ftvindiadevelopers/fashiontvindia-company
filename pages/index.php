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
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/widgets/featured/featured.widget.php" ?>
    <section>
      <div class="section-content">
        <form action="" class="form">
          <div class="form-input">
            <input type="date" name="" id="" placeholder="Your Name">
          </div>
          <div class="form-input">
            <input type="number" name="" id="" placeholder="Your Name">
          </div>
          <div class="form-input">
            <select name="" id="">
              <?php for ($i = 0; $i < 10; $i++) { ?>
                <option value="Option">Option</option>
              <?php } ?>
            </select>
          </div>
          <div class="form-input">
            <input type="checkbox" name="" id="">
            <span>Check</span>
          </div>
          <div class="form-input">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
          </div>
        </form>
      </div>
    </section>
  </main>
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php";
  ?>
</body>

</html>