<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    include '../classes/dbh_classes.php';
    include '../classes/signin_classes.php';
    include '../classes/signin_ctrl_classes.php';
    $signin = new SigninCtrl($email,$pwd);
    $signin-> signinUser();
    header('Location: ../index.php?error=none');
}
