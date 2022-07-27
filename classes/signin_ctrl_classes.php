<?php

class SigninCtrl extends Signin{
    
    private $email;
    private $pwd;

    public function __construct($email,$pwd) {

        $this->email=$email;
        $this->pwd=$pwd;
    }

    public function signinUser() {

        if($this->emptyInput() == false) {
            header("Location: ../sign_user.php?error=emptyinput");
            exit();
        }

        if($this->invalidEmail() == false) {
            header("Location: ../sign_user.php?error=invalidemail");
            exit();
        }

        $this->getUser($this->email, $this->pwd);
    }


    private function emptyInput() {

        $results;

        if(empty($this->email) || empty($this->pwd)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    private function invalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }
}
