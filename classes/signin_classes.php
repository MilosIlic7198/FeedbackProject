<?php

class Signin extends Dbh {

    protected function getUser($email,$pwd) {
        $sql = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_email = ?;');

        if(!$sql->execute(array($email))){
            $sql = null;
            header('Location: ../sign_user.php?error=sqlFailed');
            exit();
        }

        if($sql->rowCount() == 0){
            $sql = null;
            header('Location: ../sign_user.php?error=usernotfound');
            exit();
        }

        $pwdHashed = $sql->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd,$pwdHashed[0]['users_pwd']);

        if($checkPwd == false){
            $sql = null;
            header('Location: ../sign_user.php?error=wrongpassword');
            exit();
        } elseif($checkPwd == true) {
            $sql = $this->connect()->prepare('SELECT * FROM users WHERE users_email = ?;');

            if(!$sql->execute(array($email))){
                $sql = null;
                header('Location: ../sign_user.php?error=sqlFailed');
                exit();
            }

            if($sql->rowCount() == 0){
                $sql = null;
                header('Location: ../sign_user.php?error=usernotfound');
                exit();
            }

            $user = $sql->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_id'] = $user[0]['users_id'];
            $_SESSION['user_email'] = $user[0]['users_email'];

            $sql = null;
        }
    }
}
