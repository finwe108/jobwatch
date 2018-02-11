<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Post a Job - JobWatch Employer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <link rel="stylesheet" href="css/fullcalendar.print.css">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body {
            background: #e5e5e5;
            margin-bottom: 5%;
            font-family: 'Lato', sans-serif;
        }

        a:hover {
            text-decoration: none;
        }

        .post-jobs {
            width: auto;
            float: left;
            font-family: 'Lato', sans-serif;
        }

        .nav-posts {
            float: right;
            width: auto;
        }

        .register-for-job {
            width: 70%;
            margin: 0 auto;
            background: white;
            padding: 20px;
            font-family: 'Lato', sans-serif;
        }

        .nav-link, .dropdown-item {
            font-size: 12px;
            font-family: 'Lato', sans-serif;
        }

        .form-control {
            font-size: 12px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white p-2">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php"><img src="images/logo4dark32.svg" alt=""><b> JobWatch</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job_ads.php">Job Ads</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Talent Search</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">PHP Groups Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-bell" style="font-size: 16px;"></i></a>
                    </li>
                    <li class="nav-item dropdown" style="margin-top: -5px;">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/img_avatar3.png" class="img-fluid rounded-circle mr-2" width="32" alt="">
                            JohnPaul
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> My Profile</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-settings" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> Setting</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5 mb-3 p-2 bg-white">
            <div class="post-jobs">
                <h5 style="margin-top: 10px;padding-left: 20px;font-size: 14px;">My Profile</h5>
            </div><!--  post-jobs -->
            <div class="nav-posts">
                <a href="post_job.php" class="btn btn-light" style="font-size: 12px;">Save</a>
            </div><!-- nav-posts -->
        </div><!-- end col-lg-12 mt-5 pt-3 pl-4 bg-white -->
    </div>
    <div class="row">
        <div class="col-lg-12 bg-white">
            <div class="register-for-job">
                <form method="post" action="" style="font-size: 12px;">
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label text-right">Fullname: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullname"
                                   placeholder="-Eg. Human Resource Manager">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="designation" class="col-sm-2 col-form-label text-right">Designation:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="designation" placeholder="N/A">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="department" class="col-sm-2 col-form-label text-right">Department:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="department" placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label text-right">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="job_specification" value="nicequinoe@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-10">
                            <a href="" class="btn btn-light" style="font-size: 12px">Change ID Login</a>
                            <a href="" class="btn btn-light" style="font-size: 12px">Change Password</a>
                        </div>
                    </div>

            </div>
        </div>
        </form>
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
