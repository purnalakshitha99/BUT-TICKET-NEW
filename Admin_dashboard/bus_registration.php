<?php
        require_once('../classes/dbConnectorC.php');

        use classes\dbconnectorC;



        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['submit'])) {
                if (empty($_POST['Number']) || empty($_POST['color'])|| empty($_POST['Model'])|| empty($_POST['seats'])|| empty($_POST['ID'])) {
                    echo'<div class="alert alert-danger" role="alert"> Please fill the Form!</div>';
                } else {
                    $Number = $_POST['Number'];
                    $color = $_POST['color'];
                    $Model = $_POST['Model'];
                    $seats = $_POST['seats'];
                    $ID = $_POST['ID'];

                    $dbcon = new dbconnectorC();
                    $con = $dbcon->getConnection();
                    
                

                   
                    $query1 = "INSERT INTO bus(Type_of_Bus,Bus_Registration_Number,Colour,No_Of_Seats,Bus_ID)VALUES(?,?,?,?,?)";

                    $pstmt1 = $con->prepare($query1);
                    $pstmt1->bindValue(1, $Model);

                    $pstmt1->bindValue(2, $Number);
                    $pstmt1->bindValue(3, $color);
                    $pstmt1->bindValue(4, $seats);
                    $pstmt1->bindValue(5, $ID);
                    $pstmt1->execute();


                    if ($pstmt1) {                        
                        echo'<div class="alert alert-success" role="alert">Successfully Added.</div>';

                    } else {                      
                        echo'<div class="alert alert-danger" role="alert"> Please fill the Form!</div>';
                    }
                }
            }
        }
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

user-cst/20/027
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bus Registration</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="bus registration.css">
        <title>Bus Registration</title>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bus registration.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
              integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>        
        <div class="container-fluid bg-dark text-light py-3">
            <div class="d-flex justify-content-center">
                <h1 class="display-6"> Bus Registration</h1>
            </div>
        </div>
        <section class="container my-2 bgdark w-50 text">
            <form class="row g-3p-3" action="" method="POST">


                
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Bus ID</label>
                    <input type="text" class="form-control" id="validationCustom01" name="ID">

                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Bus Registration Number</label>
                    <input type="text" class="form-control" id="validationCustom01" name="Number">

                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Bus Colour</label>
                    <input type="text" class="form-control" id="validationCustom02" name="color">

                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Bus Model</label>
                    <input type="text" class="form-control" id="inputmodel" name="Model">
                </div>
                <div class="col-md-7">
                    <label for="inputPassword4" class="form-label">Number of seats</label>
                    <input type="text" id="inputseats" class="form-control" name="seats"/>
                </div>





                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit">Add Bus</button>
                    
                </div>


                

        </section>
        

    </body>
</html>
