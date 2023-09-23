<?php
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $username= $_POST["uid"];
    $email= $_POST["email"];
    $phone_no= $_POST["pno"];
    $pwd= $_POST["pwd"];
    $pwdRepeat= $_POST["pwdrepeat"];

    require_once 'DbConnector_n.php';
    require_once 'functions.php';

    $emptyInput= emptyInputSignup($name, $username, $email, $phone_no, $pwd, $pwdRepeat);
    $invalidUid= invalidUid($username);
    $invalidEmail= invalidEmail($email);
    $pwdMatch= pwdMatch($pwd, $pwdRepeat);
    $uidExists= uidExists($conn, $username, $email);

    if($emptyInput !==false){
        header("Location: ../sign_in.php?error=emptyinput");
        exit();
    }
    if($invalidUid !==false){
        header("Location: ../sign_in.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !==false){
        header("Location: ../sign_in.php?error=invalidEmail");
        exit();
    }
    if($pwdMatch !==false){
        header("Location: ../sign_in.php?error=passworddoesntmatch");
        exit();
    }
    if($uidExists !==false){
        header("Location: ../sign_in.php?error=usernameisalreadyexist");
        exit();
    }
    createUser($conn, $name, $email,  $username, $pwd, $phone_no);
    
}
else{
    header('Location:../sign_in.php');
    exit();
}