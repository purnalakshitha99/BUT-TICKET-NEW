<?php 
session_start();
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap"
            rel="stylesheet">

        <title>Profile</title>
    </head>

    <body>
        <section>
            <div class="row">
                <div id="topbar">
                    <div>
                        <h2>Journey Ease</h2>
                    </div>
                    <div>
                        <span>Welcome <?php 
                    if(isset($_SESSION["name"])){
                        echo $_SESSION["name"]. ' ! ';
                    }else{
                        echo 'user ! ';
                    }
                    ?></span>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="pt-5">
                    <ul class="pt-4">
                        <li><a href="dashboard-page.php">Dashboard</a></li>
                        <li><a href="feedback-page.php">Feedback</a></li>
                        <li><a href="profile-page.php" class="active">Profile</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <!--breadcum bar-->
                <div class="row p-4 pb-0 pt-5">
                    <div class="col pt-3">
                        <nav class="bread-card p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li>Home </li>
                                <li class="active">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!---profile card--->
                <div class="row p-4">
                    <div class="col-md-12">
                        <!-- change password -->
                        <div class="pb-5">
                            <div class="card custom-card">
                                <h5 class="card-title styled-heading p-3">Edit password</h5>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="mb-4 row">
                                            <label for="password" class="col-sm-2 col-form-label">Enter password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password"
                                                       placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm
                                                password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="confirmPassword"
                                                       placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <button type="submit" class="btn btn-primary update-button">Update
                                                password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- User Detail Update Card -->
                        <?php
                        //$session_start();
                        //$_SESSION['EMAIL'] = $EMAIL;
                        if(isset($_SESSION["userid"] )){
                            $User_ID = $_SESSION["userid"];


                        }
                        

                        require_once('../classes/dbConnectorC.php');

        use classes\dbconnectorC;


                        $dbcon = new dbconnectorC();
                        $con = $dbcon->getConnection();

                        $query = "SELECT * FROM user WHERE User_ID=?";
                        $pstmt = $con->prepare($query);
                        $pstmt->bindValue(1, $User_ID);
                         // Bind the value to the placeholder
                         $pstmt->bindValue(2, $name);
                         $pstmt->bindValue(3, $email);
                         $pstmt->bindValue(4, $username);
                         $pstmt->bindValue(5, $pwd);
                         
                         $pstmt->bindValue(6, $phone_no);
                        $pstmt->execute();
                        
                      //  $pstmt->bindValue(1, $User_ID);

                        $pstmt->execute();


                        $result = $pstmt->fetch(PDO::FETCH_OBJ);

if (!empty($result)) {
    $username = isset($result->username) ? $result->username : '';
    $name = isset($result->name) ? $result->name : '';
    $email = isset($result->email) ? $result->email : '';
    $phone_no = isset($result->phone_no) ? $result->phone_no : '';
} else {
}

                      

                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            if (isset($_POST['update'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $phone_no = $_POST['phone_no'];
                        
                                // Create a new PDO statement object for the second query
                                $pstmt2 = $con->prepare("UPDATE user SET Username=?, Name=?, Email=?, Phone_Number=?");
                        
                                // Bind values to the second query
                                $pstmt2->bindValue(1, $username);
                                $pstmt2->bindValue(2, $name);
                                $pstmt2->bindValue(3, $email);
                                $pstmt2->bindValue(4, $phone_no);
                        
                                // Execute the second query
                                $pstmt2->execute();
                            }
                        }
                         echo $username;
                         echo "jhgfd";
                        ?>
                        <div class="card custom-card">
                            <h5 class="card-title styled-heading p-3">Update User Details</h5>
                            <div class="card-body">
                                <form>
                                    <form class="form-horizontal" action="profile-page.php" method="POST">
                                      
                                        <div class="mb-4 row">
                                            <label for="name" class="col-sm-2 col-form-label">User name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="User name" name="username" value="<?php echo $username ?>">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="name" class="col-sm-2 col-form-label">Full name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name"placeholder="Full name" value="<?php echo $name ?>">
                                            </div>
                                        </div>

                                        <div class="mb-4 row">
                                            <label for="name" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="email" placeholder="Email" value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="phoneNumber" class="col-sm-2 col-form-label">Phone number</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" id="phoneNumber"
                                                       placeholder="Enter Phone Number" name="phone_no" value="<?php echo $phone_no ?>">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <button type="submit" class="btn btn-primary update-button" name="update">Update</button>
                                        </div>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
