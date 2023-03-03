<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/web_app/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login_page</title>
</head>
<body>
<div class="container py-2">
    <?php require "blocks/headerLogout.php" ?>

    <main>
        <div class="my-3 p-3 bg-body rounded shadow-sm justify-content-center">
            <?php require "blocks/requestOrderForm.php" ?>
        </div>
    </main>

    <?php require "blocks/footer.php" ?>
</div>
</body>
</html>