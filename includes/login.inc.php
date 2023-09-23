<?php
require_once 'functions.php';
if(isset($_POST["submit"])){
    $username= $_POST["uid"];
    $pwd= $_POST["pwd"];

    require_once 'DbConnector_n.php';

    if(emptyInputLogin($username, $pwd) !==false){
        exit();
    }
    LoginUser($conn, $username, $pwd);

}
else{
    header('Location:../sign_in.php');
    exit();
}