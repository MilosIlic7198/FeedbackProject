<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    include '../classes/dbh_classes.php';
    include '../classes/signup_classes.php';
    include '../classes/signup_ctrl_classes.php';
    $signup = new SignupCtrl($email,$pwd,$pwdRepeat);
    $signup-> signupUser();
    header('Location: ../sign_user.php?error=none');
}
