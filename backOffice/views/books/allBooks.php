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
    <title>Title</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="addBook.php" class="btn btn-primary my-5"><i class="far fa-plus-square"></i> Add Book</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr class="text-center text-capitalize">
                            <th>Cover</th>
                            <th>id</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>resume</th>
                            <th>price</th>
                            <th>discount</th>
                            <th>release_date</th>
                            <th>idauthor</th>
                            <th>idcategory</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while($book = $data->fetchObject()){ ?>
                        <tr class="text-center">
                            <div class="container my-2">
                                <td>
                                    <div class="container w-75 h-100"><img class="w-75 h-100"
                                            src="../../assets/images/books/<?php echo $book->image;?>"
                                            alt="<?php echo $book->image;?>">
                                    </div>

                                </td>
                                <td><div class="my-5"><?php echo $book->id; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->name; ?> </div></td>
                                <td><div class="my-5"><?php echo $book->description; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->resume; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->price; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->discount; ?> </div></td>
                                <td><div class="my-5"><?php echo $book->release_date; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->idauthor; ?></div> </td>
                                <td><div class="my-5"><?php echo $book->idcategory; ?></div> </td>


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
                            </div>
                        </tr>

                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>


















    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>