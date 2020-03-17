<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location:login.php?error=notallowed');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark py-1 py-md-2  text-capitalize w-100 bg">
        <a class="navbar-brand ml-lg-5 ml-sm-0" href="../index.html" data-page="page01">BookAddiction</a>
        <div class="container-md">
            <div class="collapse navbar-collapse col-xs-12" id="nav-mobile">
                <ul class="navbar-nav ml-md-auto">

                    <li class="nav-item">



                        <a class="nav-item nav-link " href="../../controllers/userController.php?event=logout">

                            Sign Out
                        </a>

                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="container mx-0">
        <div class="row w-100">
            <div class=" link col-md-3 my-4 mx-0 bg-light overflow-hidden">
                <div class="row">
                    <div class="col-md-2 mx-0"><i class="fas fa-home px-2"></i></div>
                    <a href="dashboard.html">

                        <div class="col-md-10 mx-0">

                            Dashboard

                        </div>
                    </a>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 mx-0"><i class="fas fa-shopping-cart px-2"></i></div>
                    <a href="products.html">

                        <div class="col-md-10 mx-0">
                            Products

                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-2 mx-0"><i class="fa fa-list px-2"></i>
                        <a href="main.html">

                    </div>
                    <div class="col-md-10 mx-0">Categories</div>
                    </a>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 mx-0"><i class="fa fa-users px-2"></i></div>
                    <a href="main.html">

                        <div class="col-md-10 mx-0">Customers</div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-2 mx-0"><i class="fas fa-scroll px-2"></i></div>
                    <a href="">

                        <div class="col-md-10 mx-0">Orders</div>
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 border-bottom">
                        <h1>Dashbord</h1>
                    </div>

                    <div class="col-md-8 mt-4 border-right">
                        <div class="row">
                            <div class="col-md-12 border-bottom">
                                <h2>Products</h2>
                            </div>

                            <div class=" col-md-12 text-capitalize font-weight-bold mt-2 border-bottom">
                                <div class="row">
                                    <div class="col-md-1">
                                        <p>ref</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>name</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>author</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>description</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>price</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>discount</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ref col-md-12 text-capitalize">
                                <div class="row">
                                    <div class="col-md-1">
                                        <p>1</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>making faces</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>kevyn aucoin</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>biography</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>$75</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>$25</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="row">
                            <div class="col-md-12 border-bottom">
                                <h2>Categories</h2>
                            </div>
                            <div class=" col-md-12 text-capitalize font-weight-bold mt-2 border-bottom">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p>ref</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>name</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ref col-md-12 text-capitalize">
                                <div class="row">

                                    <div class="col-md-4">
                                        <p>1</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Biography</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 border-bottom">
                            <h2>Orders</h2>
                        </div>
                        <div class="col-md-12 text-capitalize font-weight-bold mt-2 border-bottom">
                            <div class="row">
                                <div class="col-md-1">
                                    <p>ref</p>
                                </div>
                                <div class="col-md-5">
                                    <p>customer</p>
                                </div>

                                <div class="col-md-3">
                                    <p>total amount</p>
                                </div>

                            </div>
                        </div>
                        <div class="ref col-md-12 text-capitalize mt-2">
                            <div class="row">
                                <div class="col-md-1">
                                    <p>1</p>
                                </div>
                                <div class="col-md-5">
                                    <p>mkacher wael</p>
                                </div>

                                <div class="col-md-3">
                                    <p>$500</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="">details</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>