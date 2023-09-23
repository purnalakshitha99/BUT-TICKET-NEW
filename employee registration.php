<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/employee .css">
    
    <title>Add Employee</title>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="employee .css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    
    <div class="container-fluid bg-light text-light py-3">
        <div class= "d-flex justify-content-center text-dark">
            <h1 class="display-6"> Employee Registration</h1>
        </div>
    </div>
    <section class="container my-2 bgdark w-50 text">
        <form class="row g-3p-3">
            
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                
                
        
            </div>


            <div class="col-md-4">
                <label for="inputState" class="form-label">Category</label>
                <select id="inputState" class="form-select">
                    <option selected>Driver</option>
                    <option>Conductor</option>

                </select>
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" required>
              
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Contact No</label>
                <input type="text" id="phone" class="form-control" data-mdb-input-mask="+48 999-999-999" />
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>




                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text mt-3" id="basic-addon1">Appointe Date</span>
                        <input type="date" class="form-control mt-3" placeholder="Appoint Date"
                            aria-label="Departure Date" aria-describedby="basic-addon1">

                    </div>
                </div>

                
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                  </div>
           
        
                
           
    </section>


   



</body>

</html>