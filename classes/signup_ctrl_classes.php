<?php

class SignupCtrl extends Signup{
    
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($email,$pwd,$pwdRepeat) {

        $this->email=$email;
        $this->pwd=$pwd;
        $this->pwdRepeat=$pwdRepeat;
    }

    public function signupUser() {

        if($this->emptyInput() == false) {
            header("Location: ../sign_user.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("Location: ../sign_user.php?error=invalidemail");
            exit();
        }
        if($this->pwdMatch() == false) {
            header("Location: ../sign_user.php?error=pwdnotmatch");
            exit();
        }
        if($this->emailCheck() == false) {
            header("Location: ../sign_user.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->email, $this->pwd);
    }


    private function emptyInput() {

        $results;

        if(empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
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

    private function pwdMatch() {
        if ($this->pwd !== $this->pwdRepeat) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    private function emailCheck() {
        if (!$this->checkUser($this->email)) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }
}
