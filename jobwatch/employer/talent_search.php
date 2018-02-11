<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - JobWatch Employer</title>
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
            width: 25%;
            float: left;
        }

        .post-jobs h4 {
            font-size: 16px;
        }

        .nav-posts {
            float: right;
            width: auto;
        }

        .post-research {
            width: 60%;
            float: left;
            margin-top: -5px;
        }

        #position_title {
            width: 500px;
        }

        .card-subtitle.mb-4.text-muted {
            font-size: 11px;
        }

        .card-text {
            font-size: 12px;
            color: #6c757d;
        }
        .card-title {
            margin-top: -10px;
        }

        .card-title a {
            color: #1880c4;
            font-size: 16px;
            font-weight: bold;
        }

        .footer {
            width: 100%;
            color: #6c757d;
            font-size: 12px;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .card-body {
            height: 180px;
        }

        #position_title {
            font-size: 12px;
        }

        .btn.btn-light.mb-2.ml-4 {
            font-size: 12px;
        }
        #min, #max, #submit {
            font-size: 11px;
        }
        .form-check-label.pl-2 {
            color:#6c757d
        }
        .nav-link {
            font-size: 12px;
        }
        .dropdown-item {
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
                    <a class="nav-link" href="talent_search.php">Talent Search</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profile_employee.php">PHP Groups Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-bell" style="font-size: 16px;"></i></a>
                    </li>
                    <li class="nav-item dropdown" style="margin-top: -5px;">

                        <a class="nav-link dropdown-toggle" href="profile_employee.php" id="navbarDropdown" role="button"
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
        <div class="col-lg-12 mt-5 pt-3 pl-4 bg-white">
            <div class="post-jobs">
                <h4>Talent Search</h4>
            </div><!--  post-jobs -->
            <div class="post-research">
                <form class="form-inline">
                    <div class="form-group row mb-2">
                        <input type="text" class="form-control" id="position_title"
                               placeholder="Search For Position Title">
                    </div>
                    <button type="submit" class="btn btn-light mb-2 ml-4">Search</button>
                </form>
            </div>
            <div class="nav-posts">
                <a href="add_post_job.php" class="btn btn-light" style="font-size: 12px;margin-top: -8px;">Retrieve
                    Resume</a>
            </div><!-- nav-posts -->
        </div><!-- end col-lg-12 mt-5 pt-3 pl-4 bg-white -->
    </div>

    <div class="row mt-3">
        <div class="col-lg-2 p-3" style="min-height: 700px;background: #fff;line-height: 1.5em;font-size: 12px; ">
            <h4>Location</h4>
            <form action="" method="post">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="national_cap">
                    <label class="form-check-label pl-2" for="national_cap">
                        National Capital Reg
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="valencia">
                    <label class="form-check-label pl-2" for="valencia">
                        Valencia City
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="malaybalay">
                    <label class="form-check-label pl-2" for="malaybalay">
                        Malaybalay City
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="san_fernando">
                    <label class="form-check-label pl-2" for="san_fernando">
                        San Fernando
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cdo">
                    <label class="form-check-label pl-2" for="cdo">
                        Cagayan De Oro
                    </label>
                </div>

                <h4 class="mt-3">Industry</h4>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="computer_sci">
                    <label class="form-check-label pl-2" for="computer_sci">
                        Computer/Information Technology (Software)
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Call_Center">
                    <label class="form-check-label pl-2" for="Call_Center">
                        Call Center/IT Enable Services
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Consulting">
                    <label class="form-check-label pl-2" for="Consulting">
                        Consulting (IT science, Engineer..
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Education">
                    <label class="form-check-label pl-2" for="Education">
                        Education
                    </label>
                </div>

                <h4 class="mt-3">Salary</h4>
                <div class="row custom-font">
                    <div class="col-sm-6" style="margin:0;">
                        <label for="min">MIN</label>
                        <input type="text" name="min" id="min" class="form-control">
                    </div>
                    <div class="col-sm-6" style="margin:0;">
                        <label for="max">MAX</label>
                        <input type="text" name="max" id="max" class="form-control">
                    </div>
                </div>

                <input type="submit" name="apply" value="APPLY" class="btn btn-block btn-light mt-2" id="submit">
            </form>
        </div>

        <div class="col-lg-10" style="min-height: 700px;">
            <div class="row pl-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pl-4 mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pl-4 mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pl-4 mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pl-4 mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Webmaster (10yrs)</a></h5>
                            <h6 class="card-subtitle mb-4 text-muted">Subic Bay Metropolitan Authority</h6>
                            <p class="card-text">Economics <br> University of the Philippines</p>
                            <div class="footer">
                                <span style="width:50%;float: left;">PHP 30, 000</span>
                                <span style="width:50%;float: left;">Bachelor/(2007)</span>
                            </div>
                        </div>
                    </div>
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
