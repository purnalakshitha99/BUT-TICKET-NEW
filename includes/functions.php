<?php
function emptyInputSignup($name, $username, $email, $phone_no, $pwd, $pwdRepeat)
{
    $result;
    if (empty($name) || empty($username) || empty($email) || empty($phone_no) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUid($username)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat)
{
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
// function uidExists($conn, $email, $pwd)
// {

//     echo "uid exits athule";
//     $sql = "SELECT * FROM user WHERE  Email= ?;";
//     $stmt = mysqli_stmt_init($conn);
//     echo "<br>";

//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         echo "<br>";
//         echo "mysqli_stmt_prepare";
//         header("Location: ../sign_in.php?error=stmtfailed");
//         exit();
//     }
//     echo "<br>";
//     echo "mysqli_stmt_prepare eliyee";
//     mysqli_stmt_bind_param($stmt, "ss", $email, $pwd);
//     mysqli_stmt_execute($stmt);
//     $resultData = mysqli_stmt_get_result($stmt);


//     if ($row = mysqli_fetch_assoc($resultData)) {
//         return $row;
//     } else {
//         return false;
//     }
//     mysqli_stmt_close($stmt);
// }

function uidExists($conn, $email, $pwd)
{
    $sql = "SELECT * FROM user WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../sign_in.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "s", $email);

    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    echo  print_r($resultData);

    if ($row = mysqli_fetch_assoc($resultData)) {
        echo "<pre>";
        print_r($row);
        echo "<pre>";
        mysqli_stmt_close($stmt); // Close the statement before returning
        return $row;
    } else {
        mysqli_stmt_close($stmt); // Close the statement before returning
        return false;
    }
}



function createUser($conn, $name, $email, $username, $pwd, $phone_no)
{
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


function emptyInputLogin($email, $pwd)
{
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function LoginUser($conn, $email, $pwd)
{
    echo "purna" . $email;
    $uidExist = uidExists($conn, $email, $pwd);
    echo "<pre>";
    print_r($uidExist);
    echo "<pre>";
    if ($uidExist === false) {


        header("Location:../sign_in.php?error=wronglogin1");
        exit();
    }


    $hashedPwdnew = password_hash('12345678', PASSWORD_DEFAULT);


    $pwdHashed =  $uidExist["Password"];
    $checkhPwd = password_verify('12345678', $hashedPwdnew);

    $bool = false;
    echo "<br>";
    echo "boolean value >>>" . $checkhPwd;
    echo "<br>";
    echo "<br>";
    echo "checkpwd   :   ";
    echo $checkhPwd;
    echo "<br>";

    if ($checkhPwd === false) {
        echo "hiiiiiiiiiiii";
        // header("Location:../sign_in.php?error=wronglogin2");

        exit();
    } else if ($checkhPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExist["User_ID"];
        $_SESSION["username"] = $uidExist["Username"];
        $_SESSION["name"] = $uidExist["Name"];
        $_SESSION["role"] = $uidExist["role"];



        $role = $_SESSION["role"];

        if ($role == 'pasanger') {
            // Redirect unauthorized users
            header("Location:../Peseenger_dashboard/dashboard-page.php");
            exit();
        } elseif ($role == 'conductor') {

            header("Location:../conductorDashboard.php");
        } else {
            echo "maru mru mru";
        }
    }
}
