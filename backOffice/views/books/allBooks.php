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
                <tr>
                    <th>#</th>
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
                <tr>
                    <td><?php echo $book->id; ?> </td>
                    <td><?php echo $book->name; ?> </td>
                    <td><?php echo $book->description; ?> </td>
                    <td><?php echo $book->resume; ?> </td>
                    <td><?php echo $book->price; ?> </td>
                    <td><?php echo $book->discount; ?> </td>
                    <td><?php echo $book->release_date; ?> </td>
                    <td><?php echo $book->idauthor; ?> </td>
                    <td><?php echo $book->idcategory; ?> </td>
                    
                    <td> 
                        <a href="../../controllers/bookController.php?event=delete&&idBook=<?php echo $book->id; ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i>   </a>
                        <a href="editBook.php?id=<?php echo $book->id; ?>&&name=<?php echo $book->name; ?>
                        &&description=<?php echo $book->description; ?>&&resume=<?php echo $book->resume; ?> 
                        &&price=<?php echo $book->price; ?>&&discount=<?php echo $book->discount; ?>&&release_date=<?php echo $book->release_date; ?>
                        &&idauthor=<?php echo $book->release_date; ?>&&idcategory=<?php echo $book->idcategory; ?>" class="btn btn-warning"><i class="far fa-edit"></i></a> 
                    </td>
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