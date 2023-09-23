<?php
function emptyInputSignup($name, $username, $email, $phone_no, $pwd, $pwdRepeat){
    $result;
    if(empty($name) || empty($username) || empty($email) || empty($phone_no) || empty($pwd) || empty($pwdRepeat)){
        $result= true;
    } else{
        $result= false;
    }
    return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result= true;
    } else{
        $result= false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result= true;
    } else{
        $result= false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result= true;
    } else{
        $result= false;
    }
    return $result;
}
function uidExists($conn, $username, $email){
    $sql= "SELECT * FROM user WHERE User_ID= ? OR Email= ?;";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../sign_in.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData= mysqli_stmt_get_result($stmt);

    if($row= mysqli_fetch_assoc($resultData)){
        return $row;
    } else{
        return false;    
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $name, $email, $username, $pwd, $phone_no){
    // Calculating userCount with a prepared statement
    $sqlCount = "SELECT COUNT(*) FROM user";
    $stmtCount = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmtCount, $sqlCount)) {
        header("Location: ../sign_in.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmtCount);
    mysqli_stmt_bind_result($stmtCount, $userCount);
    mysqli_stmt_fetch($stmtCount);
    mysqli_stmt_close($stmtCount);

    // Generate a new userID
    $userID = 'USER' . sprintf('%04d', $userCount + 1);

    // Prepare the INSERT statement
    $sql = "INSERT INTO user (User_ID, Name, Email, Username, Password, Phone_Number) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../sign_in.php?error=stmtfailed");
        exit();
    }

    // Hash the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ssssss", $userID, $name, $email, $username, $hashedPwd, $phone_no);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect with success message
    header("Location:../sign_in.php?error=none");
    exit();
}


function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result= true;
    } else{
        $result= false;
    }
    return $result;
}
function LoginUser($conn, $username, $pwd){
    $uidExist= uidExists($conn, $username, $username);
    if($uidExist=== false){
        header("Location:../sign_in.php?error=wronglogin1");
        exit();
    }
    $pwdHashed=  $uidExist["Password"];
    $checkhPwd= password_verify($pwd, $pwdHashed);

    if($checkhPwd === false){
        ("Location:../sign_in.php?error=wronglogin2");
        exit();
    } else if($checkhPwd === true){
        session_start();
        $_SESSION["userid"]= $uidExist["User_ID"];
        $_SESSION["username"]= $uidExist["Username"];
        $_SESSION["name"]= $uidExist["Name"];
        header("Location:../Peseenger_dashboard/dashboard-page.php");
        exit();
    }
} 
