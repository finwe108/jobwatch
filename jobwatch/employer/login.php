<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - JobWatch Employer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e5e5e5;
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

        .col-lg-5.offset-3.bg-white.p-5 {
            margin-top:10%;
        }


    </style>
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-5"><a href="index.php" class="navbar-brand">
            <img src="images/logo4dark32.svg" alt="">
            <span class="font-weight-bold" style="color:black;">JobWatch</span></a>
    </h5>
    <a class="btn btn-lg btn-outline-primary" href="register.php">Register</a>
</div>

<div class="container">
    <div class="row login-section">
        <div class="col-lg-5 offset-3 bg-white p-5">
            <h4>Login</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>&nbsp;&nbsp;
                <a href="">Forget password?</a>
            </form>
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
