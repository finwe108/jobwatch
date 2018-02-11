
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Customer Information Sheet</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>



  <body class="bg-light">

    <div class="container">     
      
      <div class="row">

        <div class="col-md-8 offset-md-2 order-md-1">
          <h4 class="mb-3">Create your Account</h4>
          <form class="needs-validation" novalidate>
            <div class="row">

              <div class="col-md-6 mb-3">
                <label for="firstName"></label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>


              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName"></label>
                <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username"></label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email"></span></label>
              <input type="email" class="form-control" id="email" placeholder="Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="password"> </label>
              <input type="Password" class="form-control" id="password" placeholder="Password">
              <div class="invalid-feedback">
                Please enter your correct number.
              </div>
            </div>

            <div class="mb-3">
              <label for="password"></label>
              <input type="Password" class="form-control" id="password" placeholder="Confirm Password">
              <div class="invalid-feedback">
                Please enter your correct number.
              </div>
            </div>

            <div class="mb-3">
              <label for="address"></label>
              <input type="text" class="form-control" id="address" placeholder="Address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="currentlocation"></label>
              <input type="text" class="form-control" id="address2" placeholder="Current Location">
            </div>

            <div class="mb-3">
              <label for="mobile"> </label>
              <input type="text" class="form-control" id="MobileNo" placeholder="Mobile">
            </div>

             <div class="mb-3">
              <label for="Keyskill"></label>
              <input type="text" class="form-control" id="address2" placeholder="Key Skill">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Agree to the term and conditions</label>
            </div>
            
            <hr class="mb-4">

            <h4 class="mb-3"></h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <small class="text-muted">Already a member?</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              
            </div>


                
             
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Create Account</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div

 >   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
