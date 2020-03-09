<?php
include "../configdb/db_connector.php";
include "../models/book.php";

$base = connect_to_db();

if (isset($_GET['event']) && !empty($_GET['event'])) {
    
    $event = $_GET['event'];

    switch ($event) {
        case 'add':
            
                $book = new Book();
                $book->name = $_REQUEST['name'];
                $book->description = $_REQUEST['description'];
                $book->resume = $_REQUEST['resume'];
                $book->price = $_REQUEST['price'];
                $book->discount = $_REQUEST['discount'];
                $book->release_date= $_REQUEST['release_date'];
                $book->idauthor = $_REQUEST['idauthor'];
                $book->idcategory = $_REQUEST['idcategory'];
                $image=$_FILES['img']['name'];
                $ext=substr($image,strpos($image,"."));
                $imageName=generateRandomString().$ext;
                move_uploaded_file($_FILES['img']['tmp_name'],"../assets/images/books/".$imageName); 
                $book->image = $imageName;
                $book->insert();
            
            break;
        case 'delete':
                $book = new Book();
                $book->id = $_GET['idBook'];
                $book->delete();
            break;
            case 'edit':
                $book = new Book();

                $book->id = $_GET['id'];
                $book->name = $_REQUEST['name'];
                $book->name = $_REQUEST['description'];
                $book->name = $_REQUEST['resume'];
                $book->name = $_REQUEST['price'];
                $book->name = $_REQUEST['discount'];
                $book->name = $_REQUEST['release_date'];
                $book->name = $_REQUEST['idauthor'];
                $book->name = $_REQUEST['idcategory'];
                $book->edit();
                
            break;   
            
        default:
            echo "<h1 style='color:red'>Invalid Action !</h1>";
        break;
       
        }
}else {
    echo "<h1 style='color:red'>You Are not allowed !</h1>";
}

function generateRandomString(){
    $hourouf="012356789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    $charLength=strlen($hourouf);
    $randomString="";
    for($i=0;$i<10;$i++){
        $randomString=$randomString.$hourouf[rand(0,$charLength-1)];
    }
    return $randomString;
}
?>


