<?php
include "../../configdb/db_connector.php";
$base = connect_to_db();
$id = $_GET['id'];
$book->name = $_REQUEST['name'];
$book->description = $_REQUEST['description'];
$book->resume = $_REQUEST['resume'];
$book->price = $_REQUEST['price'];
$book->discount = $_REQUEST['discount'];
$book->release_date = $_REQUEST['release_date'];
$book->idauthor = $_REQUEST['idauthor'];
$book->idcategory = $_REQUEST['idcategory'];

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>EditBooks</title>
</head>

<body>

    <!-- this is my form -->
    <div class="container">
        <form method="POST" action="../../controllers/bookController.php?event=edit&&id=<?php echo $id ?>">
            <div class="row text-capitalize mt-3">
                
                <div class="col-md-6">
                    <label for="basic-url">name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $book->name; ?>"
                            aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">author</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="idauthor" id="idauthor"
                            value="<?php echo $book->idauthor; ?>" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-6">
                    <label for="basic-url">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        value="<?php echo $book->description; ?>" aria-label="With textarea"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">Resume</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="resume" id="resume"
                            value="<?php echo $book->resume; ?>" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <div class="row text-capitalize">
                <div class="col-md-4">
                    <label for="basic-url">price</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="price" id="price"
                            value="<?php echo $book->price; ?> " aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="basic-url">discount</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="discount" id="discount"
                            value="<?php echo $book->discount; ?>" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="basic-url">Release Date</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="release_date" id="release_date"
                            value="<?php echo $book->release_date; ?>" aria-describedby="basic-addon3">
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="basic-url">Category</label>
                    <div class="input-group">

                        <select class="custom-select" name="idcategory" id="idcategory">
                            <option selected><?php echo $book->idcategory; ?></option>
                            <option value="1">Biography</option>
                            <option value="2">Computing</option>
                            <option value="3">Business</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">Cover</label>
                    <div class="input-group">

                        <input type="file" class="form-control" name="img" required />
                    </div>

                </div>

            </div>
            <div class="row mt-3 ml-1">

                <button class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>