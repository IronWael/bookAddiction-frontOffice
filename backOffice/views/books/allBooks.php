<?php
include "../../configdb/db_connector.php";
include "../../models/book.php";

$data = Book::getAll();
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
                        <a href="../categories/allCategories.php">

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
                        <a href="addBook.php" class="btn btn-primary my-5"><i class="far fa-plus-square"></i> Add
                            Book</a>
                    </div>



                    <div class="col-md-12 mx-0">
                        <table class="table">
                            <thead>
                                <tr class="text-center text-capitalize">
                                    <th>Cover</th>
                                    <th>id</th>
                                    <th>Name</th>
                                    <!--<th>description</th>
                                    <th>resume</th>-->
                                    <th>price</th>
                                    <!--<th>discount</th>-->
                                    <th>release date</th>
                                    <th>id author</th>
                                    <th>id category</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php while($book = $data->fetchObject()){ ?>
                                    
                                <div class="container my-2">
                                   <tr class="text-center">
                                    
                                        <td>
                                            <div class="container"><img class="w-75 h-100"
                                                    src="../../assets/images/books/<?php echo $book->image;?>"
                                                    alt="<?php echo $book->image;?>">
                                            </div>

                                        </td>
                                        <td>
                                            <div class="my-5"><?php echo $book->id; ?></div>
                                        </td>
                                        <td>
                                            <div class="my-5"><?php echo $book->name; ?> </div>
                                        </td>
                                        <!--<td>
                                            <div class="my-5"><?php echo $book->description; ?></div>
                                        </td>
                                        <td>
                                            <div class="my-5"><?php echo $book->resume; ?></div>
                                        </td>-->
                                        <td>
                                            <div class="my-5"><?php echo $book->price; ?></div>
                                        </td>
                                        <!--<td>
                                            <div class="my-5"><?php echo $book->discount; ?> </div>
                                        </td>-->
                                        <td>
                                            <div class="my-5"><?php echo $book->release_date; ?></div>
                                        </td>
                                        <td>
                                            <div class="my-5"><?php echo $book->idauthor; ?></div>
                                        </td>
                                        <td>
                                            <div class="my-5"><?php echo $book->idcategory; ?></div>
                                        </td>


                                        <td>
                                            <div class="my-5">
                                                <a href="../../controllers/bookController.php?event=delete&&idBook=<?php echo $book->id; ?>"
                                                    class="btn btn-danger"> <i class="far fa-trash-alt"></i>
                                                </a>
                                                <a href="editBook.php?idBook=<?php echo $book->id; ?>&&name=<?php echo $book->name; ?>
                                           &&description=<?php echo $book->description; ?>&&resume=<?php echo $book->resume; ?> 
                                           &&price=<?php echo $book->price; ?>&&discount=<?php echo $book->discount; ?>&&release_date=<?php echo $book->release_date; ?>
                                           &&idauthor=<?php echo $book->idauthor; ?>&&idcategory=<?php echo $book->idcategory; ?>&&image=<?php echo $book->image; ?>"
                                                    class="btn btn-warning"><i class="far fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    
                                </tr>
                                </div>
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