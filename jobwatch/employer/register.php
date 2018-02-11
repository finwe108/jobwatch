<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - JobWatch Employer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body {
            background: #e5e5e5;
            margin-bottom: 5%;
            font-family: 'Lato', sans-serif;
        }

        a.navbar-brand {
            margin-left: 30%;
        }

        a.navbar-brand:hover {
            text-decoration: none;
        }

        .btn.btn-lg.btn-outline-primary {
            background: #1880c4;
            color: white;
            border: none;
            margin-right: 5%;
            font-size: 11px;
        }

        .row.register-employee {
            padding: 2%;
        }


    </style>
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-5"><a href="index.php" class="navbar-brand">
            <img src="images/logo4dark32.svg" alt="">
            <span class="font-weight-bold" style="color:black;">JobWatch</span></a>
    </h5>
    <a class="btn btn-lg btn-outline-primary" href="login.php">Login</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5 bg-white p-5">
            <h3 class="h3 text-center" style="color:#1880c4;">Register now for an access to millions of qualified candidates</h3>
            <div class="row register-employee">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="images/employer-module.PNG" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="contact_person">Contact person name</label>
                                <input type="text" class="form-control" id="contact_person"
                                       placeholder="Contact person">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" id="contact_number"
                                       placeholder="Contact number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" placeholder="Company name"
                                   aria-describedby="passwordHelpBlock">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not
                                contain spaces, special characters, or emoji.
                            </small>

                        </div>
                        <div class="form-group">
                            <label for="email_person">Email</label>
                            <input type="text" class="form-control" id="email_person"
                                   placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="input_password">Password</label>
                            <input type="password" class="form-control" id="input_password"
                                   placeholder="Enter password">
                        </div>
                        <p>You will be the administrator and contact person for the account</p>
                        <p>By continuing, you acknowledge that you accept on JobWatch's <a href="">Privacy Policies</a>
                            and
                            <a href="">Terms & Conditions</a></p>
                        <button type="submit" name="register-employer" class="btn btn-primary">Register</button>
                        <p class="lead mt-2">Already registered? <a href="">Log in</a</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
