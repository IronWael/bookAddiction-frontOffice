<?php
session_start();

if (isset($_SESSION['email']) || !empty($_SESSION['email'])) {
    header('location:admins/dashboard.php');
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
<link rel="stylesheet" href="../assets/css/styleHome.css">
<title>Title</title>
</head>
<body>
    
<!--<a href="admins/register.php" class="btn btn-primary">Register</a>
<a href="admins/login.php" class="btn btn-info">Login</a>-->

<nav>

        <div class="navbar-nav bg-img">
            <div id="navb">
                <div class="topnav">
                    <a href="home.php">Home</a>
                    <a href="admins/register.php">Sign In</a>
                    <a href="admins/login.php">Sign Up</a>
                </div>
            </div>



            <ul class="navbar-nav ml-md-auto">

                <li class="nav-item">

                    <a class="nav-item nav-link  mr-md-2" href="#" id="bd-versions" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <a class="nav-link" href="basket.html">

                            <img id="basket" src="../images/basket.png">
                            Basket


                            <span id="shopcartnbr" class="badge badge-primary">0</span>
                        </a>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">

            <div class="col-md-3 my-4">
                <h1 class="my-4 mx-4">Categories</h1>
                <div class="card mx-4">
                    <ul class="list-group list-group-flush categories">
                        <li class="list-group-item text-center">
                            <a onclick="filterBooks('books')"> All Books </a>
                        </li>
                        <li class="list-group-item text-center my-2">
                            <a onclick="filterBooks('computing')"> Computing </a>
                        </li>
                        <li class="list-group-item text-center">
                            <a onclick="filterBooks('biography')"> Biography </a>
                        </li>
                        <li class="list-group-item text-center mt-2">
                            <a onclick="filterBooks('business')"> Business </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="books computing col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image1.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> Making Faces </a>
                                </h4>
                                <h5 class="card-text">$50 <span class="solde">75$</span></h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Making Faces')" data-toggle="modal"
                                    data-target="#exampleModal" class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>

                    <div class="books computing col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image2.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> You Can Read A Face Like A Book </a>
                                </h4>
                                <h5 class="card-text">$60 </h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('You Can Read A Face Like A Book')"
                                    data-toggle="modal" data-target="#exampleModal"
                                    class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>

                    <div class="books biography col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image3.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> Faces In The Water </a>
                                </h4>
                                <h5 class="card-text">$100</h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Faces In The Water')" data-toggle="modal"
                                    data-target="#exampleModal" class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>

                    <div class="books biography col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image4.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> Shapes, Shades And Faces </a>
                                </h4>
                                <h5 class="card-text">$80</h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Shapes, Shades And Faces')"
                                    data-toggle="modal" data-target="#exampleModal"
                                    class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>

                    <div class="books business col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image5.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> Baby Faces </a>
                                </h4>
                                <h5 class="card-text">$90</h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Baby Faces')" data-toggle="modal"
                                    data-target="#exampleModal" class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>

                    <div class="books business col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                                <img src="../images/image6.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""> Temple Of A Thousand Faces </a>
                                </h4>
                                <h5 class="card-text">$100</h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Temple Of A Thousand Faces')"
                                    data-toggle="modal" data-target="#exampleModal"
                                    class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>
    
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="text-center text-white">
                copyright &copy; Ironpeter 2020
            </p>
            <!--<a href="#home" class="scroll to-Top"> GO TO TOP!</a>-->
        </div>

    </footer>
<script src="../assets/js/homeControl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>