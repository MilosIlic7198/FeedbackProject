<?php 

class Dbh {

    public function connect() {
        try {
            $name = 'milos';
            $pass = '123456';
            $dbh = new PDO('mysql:host=localhost;dbname=feedback', $name,$pass);
            return $dbh;
        }
        catch(PDOException $e) {
            echo 'Error!:' . $e->getMessage() . '<br/>';
            die();
        }
    }
}
