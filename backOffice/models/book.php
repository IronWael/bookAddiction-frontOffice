<?php
class Book{

    public $id;
    public $name;
    public $description;
    public $resume;
    public $price;
    public $discount;
    public $release_date;
    public $idauthor;
    public $idcategory;
    public $image;

    
    public static function getAll(){

        $base = connect_to_db();
        $requette = "SELECT * From books ;";
        $data = $base->query($requette);

        return $data;
    }

    public function insert(){
        $base = connect_to_db();

        $requette = "INSERT INTO books
        VALUES(null,'$this->name','$this->description','$this->resume','$this->price','$this->discount'
        ,'$this->release_date',$this->idauthor,$this->idcategory,'$this->image');";

        $rowInserted = $base->exec($requette);
        if ($rowInserted == 1) {
            header('location:../views/books/allBooks.php');
        }else {
            echo "SQL Error !";
        }
    }

    
    public function edit(){
        $base = connect_to_db();

        $requette = "UPDATE books 
        SET 
        name ='$this->name' ,
        description='$this->description',
        resume='$this->resume',
        price=$this->price,
        discount=$this->discount,
        release_date='$this->release_date',
        idauthor = $this->idauthor,
        idcategory=$this->idcategory,
        image='$this->image' 
        WHERE id=$this->id";
        
       $rowUpdated = $base->exec($requette);
        if ($rowUpdated == 1) {
            header('location:../views/books/allBooks.php');
        }else {
            echo "SQL Error !";
        }
    }

    public function delete(){
        $base = connect_to_db();

        $requette = "DELETE FROM  books WHERE id=$this->id;";
        $rowDeleted = $base->exec($requette);
        if ($rowDeleted == 1) {
            header('location:../views/books/allBooks.php');
        }else {
            echo "SQL Error !";
        }
    }
    
}
?>