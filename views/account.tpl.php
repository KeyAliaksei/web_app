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
    <?php require "blocks/headerLogout.php" ?>

    <main>
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Company info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/web_app/images/personal_info.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></img>
                                Personal info
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        Dashboard: <?= ucfirst($_SESSION['user']); ?>,
                        <?php foreach ($pageData['companyInfo'] as $key => $value){
                            echo $value['name'];
                        } ?>
                    </h1>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body bg-danger">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-light mb-2">
                                            Amount of orders
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <?= $pageData['ordersCount']; ?>
                                        </span>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body bg-success">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-light mb-2">
                                            Sum of all active orders, €
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            €24,500
                                        </span>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body bg-warning">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-light mb-2">
                                            Amount of products
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <?= $pageData['productsCount']; ?>
                                        </span>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table mt-3 caption-top table-bordered table-info">
                    <caption class="text-dark"><h4>Your orders</h4></caption>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>

                <h4>Orders</h4>
                <?php foreach ($pageData['orders'] as $key => $value) {
                    echo "&nbsp;id:&nbsp;" . $value['id'] . "&nbsp;contract:&nbsp;" . $value['contract_number'] . "&nbsp;start date:&nbsp;" . $value['start_date'] . "&nbsp;end date:&nbsp;" . $value['end_date'] . "<br>";
                }; ?>

                <h4>Products</h4>
                <?php foreach ($pageData['products'] as $key => $value) {
                    echo "&nbsp;id:&nbsp;" . $value['id'] . "&nbsp;name:&nbsp;" . $value['name'] . "&nbsp;amount:&nbsp;" . $value['amount'] . "&nbsp;description:&nbsp;" . $value['description'] . "&nbsp;created:&nbsp;" . $value['created'] . "<br>";
                }; ?>

                <h4>Company Info</h4>
                <?php foreach ($pageData['companyInfo'] as $key => $value) {
                    echo "&nbsp;id:&nbsp;" . $value['id'] . "&nbsp;company:&nbsp;" . $value['name'] . "&nbsp;address:&nbsp;" . $value['address'] . "&nbsp;phone:&nbsp;" . $value['phone'] . "&nbsp;email:&nbsp;" . $value['email'] . "<br>";
                }; ?>
                <div class="my-3 p-3 bg-body rounded shadow-sm justify-content-center">
                    <?php require "blocks/addNewProductForm.php" ?>
                </div>
            </main>
        </div>
    </main>
    <?php require "blocks/footer.php" ?>
</div>
</body>
</html>