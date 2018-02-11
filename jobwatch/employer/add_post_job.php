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
        }
        .nav-link, .dropdown-item {
            font-size: 12px;
        }
        .form-control {
            font-size: 12px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
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
                <h5 style="margin-top: 10px;padding-left: 20px;font-size: 14px;">Create/ Edit Job Ad</h5>
            </div><!--  post-jobs -->
            <div class="nav-posts">
                <a href="post_job.php" class="btn btn-info" style="font-size: 12px;">Post Job</a>
                <a href="" class="btn btn-light" style="font-size: 12px;">Preview</a>
            </div><!-- nav-posts -->
        </div><!-- end col-lg-12 mt-5 pt-3 pl-4 bg-white -->
    </div>
    <div class="row">
        <div class="col-lg-12 bg-white">
            <div class="register-for-job">
                <form method="post" action="" style="font-size: 12px;">
                    <h4 style="border-bottom: 1px solid rgba(0,0,0,.2);padding-bottom: 10px;margin-bottom: 20px;">Job
                        Details</h4>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label text-right">Position Title: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword"
                                   placeholder="-Eg. Human Resource Manager">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="employer_type" class="col-sm-2 col-form-label text-right">Employment Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="employer_type" placeholder="Full-Time">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="position_level" class="col-sm-2 col-form-label text-right">Position Level:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="position_level" placeholder="-Position Level">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="job_specification" class="col-sm-2 col-form-label text-right">Job
                            Specification:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="job_specification" placeholder="Full-Time">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="work_location" class="col-sm-2 col-form-label text-right">Work Location:</label>
                        <div class="col-sm-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="india" value="india">
                                <label class="form-check-label" for="inlineCheckbox1">India</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Philippines" value="Philippines">
                                <label class="form-check-label" for="Philippines">Philippines</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Singapore" value="Singapore">
                                <label class="form-check-label" for="Singapore">Singapore</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Indonesia" value="Indonesia">
                                <label class="form-check-label" for="Indonesia">Indonesia</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Thailand" value="Thailand">
                                <label class="form-check-label" for="Thailand">Thailand</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Vietnam" value="Vietnam">
                                <label class="form-check-label" for="Vietnam">Vietnam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Others" value="Others">
                                <label class="form-check-label" for="Others">Others</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="monthly_salary" class="col-sm-2 col-form-label text-right">Monthly Salary:</label>
                        <div class="col-sm-10 inline">
                            <div class="row">
                                <div class="col-sm-4">
                                    <select name="monthly_salary" class="form-control" id="monthly_salary">
                                        <option value="PHP">PHP</option>
                                        <option value="US">Dollar</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="min" class="form-control" placeholder="Min">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="max" class="form-control" placeholder="Max">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="display_salary"
                                       value="display_salary">
                                <label class="form-check-label" for="display_salary">Display salary on ad to attract the
                                    right candidates</label>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="col-lg-12 bg-white mt-4">
            <div class="register-for-job" style="font-size: 12px;">
                    <h4 style="border-bottom: 1px solid rgba(0,0,0,.2);padding-bottom: 10px;margin-bottom: 20px;">Job
                        Requirements (for better candidate matching)</h4>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label text-right">Field of Studies: </label>
                        <div class="col-sm-10">
                            <select name="field_study" class="form-control" id="field_study">
                                <option value="cs">Computer Science</option>
                                <option value="it">Internet Technology</option>
                                <option value="wd">Web Developer</option>
                                <option value="ba">Business Analysis</option>
                            </select>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="checkbox" id="any_field" value="any_field">
                                <label class="form-check-label" for="any_field">Any Field</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="years_experience" class="col-sm-2 col-form-label text-right">Years of
                            Experience:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="years_experience"
                                   placeholder="-Min Years(s) of Experience">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="skills" class="col-sm-2 col-form-label text-right">Skill:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="skills"
                                   placeholder="-Enter skill(s), separate each with a comma-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right"></label>
                        <div class="col-sm-10">
                            <a href="#" class="btn btn-light" style="font-size: 12px">+Language</a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="col-lg-12 bg-white mt-4">
            <div class="register-for-job">
                <h4 style="border-bottom: 1px solid rgba(0,0,0,.2);padding-bottom: 10px;margin-bottom: 20px;">
                    Job Description</h4>
                <div class="policies p-4 mb-3" style="border: 2px solid #17a2b8;font-size: 12px;">
                    <h5 style="color:#17a2b8;">Discrimination Policies &amp; Practices</h5>
                    <p>JobWatch does not accept job advertisements that discriminate against race, religion, age,
                        gender,
                        family status or
                        disability. It is against the law in some countries* and your company may have internal
                        policies
                        againts such practices. Jobwatch.com will not bear any responsibility for any consequences that
                        may
                        arise from the inappropriateness of such job postings. </p>
                    <h5>Refer to the local job posting guidelines below:</h5>
                    <ul>
                        <li><a href="">Singapore</a></li>
                        <li><a href="">Philippines</a></li>
                    </ul>
                </div>
                <textarea title="description" name="description" id="description" cols="30" rows="10" class="ckeditor"></textarea>
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
<script src="js/ckeditor/ckeditor.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });

    CKEDITOR.editorConfig = function( config ) {
        config.language = 'es';
        config.uiColor = '#F7B42C';
        config.height = 300;
        config.toolbarCanCollapse = true;
    };
</script>
</body>
</html>
