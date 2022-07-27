<?php

class Signup extends Dbh {

    protected function setUser($email,$pwd) {
        $sql = $this->connect()->prepare('INSERT INTO users (users_email, users_pwd) VALUES (?,?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$sql->execute(array($email, $hashedPwd))){
            $sql = null;
            header('Location: ../sign_user.php?error=sqlFailed');
            exit();
        }
        $sql = null;
    }
    
    protected function checkUser($email) {
        $sql = $this->connect()->prepare('SELECT users_email FROM users WHERE users_email = ?;');

        if(!$sql->execute(array($email))){
            $sql = null;
            header('Location: ../sign_user.php?error=sqlFailed');
            exit();
        }
        $resultCheck;
        if($sql->rowCount() > 0){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
