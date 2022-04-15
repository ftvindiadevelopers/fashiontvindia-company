<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
    $title = "Features | " . $site_name;

    $meta["title"] = $title;
    $meta["description"] = "";
    $meta["keywords"] = "";
    ?>

    <title><?php echo $title; ?></title>
    <meta name="title" content="<?php echo $meta["title"]; ?>" />
    <meta name="description" content="<?php echo $meta["description"]; ?>" />
    <meta name="keywords" content="<?php echo $meta["keywords"]; ?>" />
</head>

<body>
    <!-- header -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <!-- header -->

    <!-- main -->
    <main class="pagename"></main>
    <!-- main -->

    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->

</body>

</html>