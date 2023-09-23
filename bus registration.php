<!doctype html>
<html lang="en">

<head>
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
        <form class="row g-3p-3">

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Bus ID</label>
                <input type="text" class="form-control" id="validationCustom01" required>
            </div>


            <div class="col-md-4">
                <label for="inputState" class="form-label">Bus Category</label>
                <select id="inputState" class="form-select">
                    <option selected>AC</option>
                    <option> Non AC</option>

                </select>
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Bus Number Plate</label>
                <input type="text" class="form-control" id="validationCustom01" required>

            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Bus Colour</label>
                <input type="text" class="form-control" id="validationCustom02" required>

            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Bus Model</label>
                <input type="text" class="form-control" id="inputmodel">
            </div>
            <div class="col-md-7">
                <label for="inputPassword4" class="form-label">Number of seats</label>
                <input type="text" id="inputseats" class="form-control" />
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Route ID</label>
                <input type="text" class="form-control" id="inputID">
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Driver ID</label>
                <input type="text" class="form-control" id="inputID">
            </div>
             
            <div class="col-12">
                <label for="inputAddress" class="form-label">Conductor ID</label>
                <input type="text" class="form-control" id="inputID" >
            </div>


           

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Bus</button>
            </div>




    </section>






</body>

</html>