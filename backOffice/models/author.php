<?php
class Author{

    public $id;
    public $name;

    
    public static function getAll(){

        $base = connect_to_db();
        $requette = "SELECT * From authors ;";
        $data = $base->query($requette);

        return $data;
    }

    public function insert(){
        $base = connect_to_db();

        $requette = "INSERT INTO authors VALUES(null,'$this->name');";
        $rowInserted = $base->exec($requette);
        if ($rowInserted == 1) {
            header('location:../views/authors/allAuthors.php');
        }else {
            echo "SQL Error !";
        }
    }

    public function edit(){
        $base = connect_to_db();

        $requette = "UPDATE authors SET name ='$this->name' WHERE id=$this->id";
        $rowUpdated = $base->exec($requette);
        if ($rowUpdated == 1) {
            header('location:../views/authors/allAuthors.php');
        }else {
            echo "SQL Error !";
        }
    }

    public function delete(){
        $base = connect_to_db();

        $requette = "DELETE FROM  authors WHERE id=$this->id;";
        $rowDeleted = $base->exec($requette);
        if ($rowDeleted == 1) {
            header('location:../views/authors/allAuthors.php');
        }else {
            echo "SQL Error !";
        }
    }
}
?>