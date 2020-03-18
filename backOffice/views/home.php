<?php
session_start();

if (isset($_SESSION['email']) || !empty($_SESSION['email'])) {
    header('location:admins/dashboard.php');
}

include "../configdb/db_connector.php";
include "../models/category.php";
include "../models/author.php";
include "../models/book.php";
$base = connect_to_db();
$data1 = Category::getAll();
$data2 = Author::getAll();
$data3 = Book::getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="../assets/css/styleDashbord.css">
<title>Title</title>
</head>
<body>
    
    <!--<a href="admins/register.php" class="btn btn-primary">Register</a>
    <a href="admins/login.php" class="btn btn-info">Login</a>-->

    <nav class="navbar navbar-expand-lg navbar-dark py-1 py-md-2  text-capitalize w-100 bg">
        <a class="navbar-brand ml-lg-5 ml-sm-0" href="../home.php" data-page="page01">BookAddiction</a>
        <div class="container-md">
            <div class="collapse navbar-collapse col-xs-12" id="nav-mobile">
                <ul class="navbar-nav ml-md-auto">

                    <li class="nav-item">
                    <a href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a href="admins/login.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                    <a href="admins/register.php">Sign Up</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

        

    <div class="container">
        <div class="row">

            <div class="col-md-3 my-4">
                <h1 class="my-4 mx-4">Categories</h1>
                <div class="card mx-4">
                    <ul class="list-group list-group-flush categories text-capitalize">
                    <?php while($category = $data1->fetchObject()){ ?>
                        <li class="list-group-item text-center my-2">
                            <a onclick="filterBooks('computing')"> <?php echo $category->name; ?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                <?php while($book = $data3->fetchObject()){ ?>
                    <div class="books computing col-md-4 my-4">
                        <div class="card">
                            <a href="" class="text-center">
                            <img class="img card-img-top"
                                                    src="../assets/images/books/<?php echo $book->image;?>"
                                                    alt="<?php echo $book->image;?>">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-capitalize">
                                    <a href=""> <?php echo $book->name; ?> </a>
                                </h4>
                                <h5 class="card-text">$<?php echo $book->price; ?></h5>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart('Making Faces')" data-toggle="modal"
                                    data-target="#exampleModal" class="btn btn-secondary btn-block">Add to Card</button>

                            </div>
                        </div>
                        </div>
                    <?php } ?>
                </div>

            </div>


        </div>


    </div>
    
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="text-center text-white">
                Copyright &copy; Ironpeter 2020
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