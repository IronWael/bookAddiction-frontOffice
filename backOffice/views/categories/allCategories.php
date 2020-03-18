<?php
include "../../configdb/db_connector.php";
include "../../models/category.php";

$data = Category::getAll();
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
    <link rel="stylesheet" href="../../assets/css/styleDashbord.css">
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
                    <a href="../admins/dashboard.php">

                        <div class="col-md-10 mx-0">

                            Dashboard

                        </div>
                    </a>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 mx-0"><i class="fas fa-shopping-cart px-2"></i></div>
                    <a href="../books/allBooks.php">

                        <div class="col-md-10 mx-0">
                            Products

                        </div>
                    </a>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 mx-0"><i class="fa fa-list px-2"></i>
                        <a href="allCategories.php">

                    </div>
                    <div class="col-md-10 mx-0">Categories</div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-2 mx-0"><i class="fa fa-list px-2"></i>
                        <a href="../authors/allAuthors.php">

                    </div>
                    <div class="col-md-10 mx-0">Authors</div>
                    </a>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 mx-0"><i class="fa fa-users px-2"></i></div>
                    <a href="">

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
                    <div class="col-md-12">
                        
                            <a href="addCategory.php" class="btn btn-primary my-5"><i class="far fa-plus-square"></i>
                                Add
                                Category</a>
                        
                    </div>
                    <div class="col-md-12">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($category = $data->fetchObject()){ ?>
                                <tr>
                                    <td><?php echo $category->id; ?> </td>
                                    <td><?php echo $category->name; ?> </td>
                                    <td>
                                        <a href="../../controllers/categoryController.php?event=delete&&idCategory=<?php echo $category->id; ?>"
                                            class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a>
                                        <a href="editCategory.php?id=<?php echo $category->id; ?>&&name=<?php echo $category->name; ?>"
                                            class="btn btn-warning"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>

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