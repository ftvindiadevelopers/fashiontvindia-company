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
    if (isset($_GET["date"])) {
      foreach ($_GET["date"] as $date => $value) {
        echo $value . "<br>";
      }
    }
    if (isset($_GET["verticals"])) {
      foreach ($_GET["verticals"] as $vertical => $value) {
        echo $value . "<br>";
      }
    }
    if (isset($_GET["q"])) {
      $_SESSION['SEARCH_HISTORY'] = $_SESSION['SEARCH_HISTORY'] . "," . $_GET["q"];
    }
    ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/widgets/data/data.table.widget.php" ?>
  </main>
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php";
  ?>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#entryTable').DataTable({
        dom: 'Brtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>
</body>

</html>