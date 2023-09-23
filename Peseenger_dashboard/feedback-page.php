
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
                        <li><a href="feedback-page.php" class="active">Feedback</a></li>
                        <li><a href="profile-page.php">Profile</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <!--breadcum bar-->
                <div class="row p-4 pb-0 pt-5">
                    <div class="col pt-3">
                        <nav class="bread-card rounded-5 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li>Home </li>
                                <li class="active">Feedback</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!---profile card--->
                <div class="row p-4">
                    <div class="col-md-12">

                        <!-- User Detail Update Card -->
                        <!--php-->
                        <?php
                        // $session_start();
                        if(isset($_SESSION["userid"])){

                        }
                        
                        require_once('../classes/dbConnectorC.php');

        use classes\dbconnectorC;

                     if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['Email']) || empty($_POST['feedback'])) {
                                    echo '<div class="alert alert-danger" role="alert">Please Fill all feilds.</div>';
                                } else {
                                    $Email = $_POST['Email'];
                                    $feedback = $_POST['feedback'];

                                    $dbcon = new dbconnectorC();
                                    $con = $dbcon->getConnection();

                                    $query = "SELECT User_ID FROM user WHERE email=? ";
                                     $pstmt = $con->prepare($query);
                                     $pstmt->bindValue(1, $Email);

                                     $pstmt->execute();
                                     $result = $pstmt->fetch(PDO::FETCH_OBJ);

                                    if($result){
                                        $User_ID = $result->User_ID;
                                        $query1 = "INSERT INTO feedback(User_ID,Feedback)VALUES(?,?) ";

                                    $pstmt1 = $con->prepare($query1);
                                    $pstmt1->bindValue(1, $User_ID);
                                    
                                    $pstmt1->bindValue(2, $feedback);

                                    if ($pstmt1->execute()) {
                                        echo '<div class="alert alert-success">Feedback is submitted from ' . $Email . ' Thank You!</div>';
                                    } else {
                                        $errors[] = "Failed to submit feedback";
                                    }
                                    

                                    }
                                    else {
                                        echo '<div class="alert alert-danger" role="alert">Email not found in the database.</div>';
                                    }
                                    

                                    
                                   // $pstmt1->execute();



                                    //if ($pstmt1) {
                                        //echo '<div class="alert alert-success"  </strong>Feedback is submitted from  ' . $Email . "Thank You!";
                                   // } else {
                                        //$errors[] = "Failed to feedback";
                                   // }
                                }
                            }
                        }






                        // echo '<div class="alert alert-warning alert-dismissible fade show"  role="alert"<strong>Success!</strong>Feedback is submitted from"  ' . $Email . "Thank You!";
                        ?>
                        <!--php-->
                        <div class="card custom-card p-2">
                            <h5 class="card-title pb-4 styled-heading">Feedback</h5>
                            <div class="card-body">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  id="Email" placeholder="name@example.com" name="Email">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="message" class="col-sm-2 col-form-label"> Feedback Message</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="name" rows="6" placeholder="feedback" name="feedback"
                                                      style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <button type="submit" class="btn btn-primary update-button" name="submit">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
