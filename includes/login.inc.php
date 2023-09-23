<?php
require_once 'functions.php';
if (isset($_POST["submit"])) {
    $email = $_POST["uid"];
    $pwd = $_POST["pwd"];




    require_once 'DbConnector_n.php';

    if (emptyInputLogin($email, $pwd) !== false) {
        exit();
    }
    LoginUser($conn, $email, $pwd);
}
// } else {
//     header('Location:../sign_in.php');
//     exit();
// }
