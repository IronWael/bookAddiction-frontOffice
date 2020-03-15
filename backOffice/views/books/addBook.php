<?php
include "../../configdb/db_connector.php";
include "../../models/category.php";
include "../../models/author.php";
$base = connect_to_db();
$data1 = Category::getAll();
$data2 = Author::getAll();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>AddBook</title>
</head>

<body>
    <div class="container">
        <form name="addBookForm" method="POST" action="../../controllers/bookController.php?event=add"
            onSubmit="return verifName();" enctype="multipart/form-data">
            <div class="row text-capitalize mt-3">

                <div class="col-md-6">
                    <label for="basic-url">name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">author</label>
                    <select name="idauthor" class="form-control w-100 p-1">
                        <?php while ($author = $data2->fetchObject()) { ?>
                        <tr>
                            <option value=<?php echo $author->id; ?>>
                                <?php echo $author->name; ?>
                        </tr>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-6">
                    <label for="basic-url">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        aria-label="With textarea"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="basic-url">Resume</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="resume" id="resume"
                            aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>

            <div class="row text-capitalize">
                <div class="col-md-4">
                    <label for="basic-url">price</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="price" id="price" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="basic-url">discount</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="discount" id="discount"
                            aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="basic-url">Release Date</label>
                    <div class="input-group">
                        <input type="date" class="form-control" name="release_date" id="release_date"
                            aria-describedby="basic-addon3">
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="basic-url">Category</label>
                    <div class="input-group">

                        <select name="idcategory" class="form-control w-100 p-1">



                            <?php while ($category = $data1->fetchObject()) { ?>
                            <tr>
                                <option value=<?php echo $category->id; ?>>

                                    <?php echo $category->name; ?>

                            </tr>
                            <?php } ?>
                            </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="basic-url3">Cover</label>
                    <div class="input-group">
                    <input type="file" class="form-control" name="img" required />
                    </div>
                </div>
            </div>
            
            <div class="row mt-3 ml-1">

                <button class="btn btn-primary">Add Book</button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../../assets/js/addCategory.js"></script>
</body>

</html>