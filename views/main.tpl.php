<?php
/**
* @var $pageData
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/web_app/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?= $pageData['title']; ?></title>
</head>
<body>
<div class="container py-2">
    <?php require "blocks/header.php" ?>

    <main>
        <div class="row">
            <img src="/web_app/images/1.jpg" class="img-fluid" alt="1.jpg">
        </div>
    </main>

    <?php require "blocks/footer.php" ?>
</div>
</body>
</html>