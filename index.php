<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Payment Demo</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->
    <div class="container">

      
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="text-center">
          <img
            class="mb-4"
            src="https://mdbootstrap.com/img/logo/mdb-transparent-250px.png"
            style="width: 250px; "
          />
          
          <!-- form start here -->
          <form class="card p-5" action="pay.php" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="name" id="form6Example1" class="form-control" required />
                    <label class="form-label" for="form6Example1">Full name</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" id="form6Example5" class="form-control" required/>
                <label class="form-label" for="form6Example5">Email</label>
              </div>

              <!-- Number input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="number" name="phone" id="form6Example6" class="form-control" required/>
                <label class="form-label" for="form6Example6">Phone</label>
              </div>


              <!-- Text input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="amount" id="form6Example3" class="form-control" required />
                <label class="form-label" for="form6Example3">Amount</label>
              </div>

               <div data-mdb-input-init class="form-outline mb-4 form-control">
                  <label class="visually-hidden" for="inlineFormSelectPref">Currency</label>
                    <select data-mdb-select-init class="select" name="currency">
                      <option value="BDT">BDT</option>
                      <option value="USD">USD</option>
                   </select>
              </div>

              <!-- Submit button -->
              <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </form>
          <!-- form end here -->

        </div>
      </div>
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
