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
            <div class="my-3 p-3 bg-body rounded shadow-sm justify-content-center">
                <?php require "blocks/loginForm.php" ?>
            </div>
        </main>

        <?php require "blocks/footer.php" ?>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", ()=>{
            const form = document.getElementById('login');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const currentForm = e.currentTarget;
                console.log('Form submited');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "/web_app/login/auth");
                xhr.setRequestHeader("Accept", "application/json");
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        console.log(xhr.status);
                        console.log(xhr.responseText);
                    }};

                let data = `{
                  "loginName": ${document.getElementById("inputLogin").value},
                  "Customer": "Jason Sweet",
                  "Quantity": 1,
                  "Price": 18.00
                }`;

                xhr.send(data);
            })
        })

    </script>
</body>
</html>