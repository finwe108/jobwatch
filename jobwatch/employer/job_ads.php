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
        .welcome-job {
            width: 40%;
            margin: 0 auto;
        }
        .nav-link {
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
        <div class="col-lg-12 mt-5 pt-2 pl-4 bg-white">
            <div class="post-jobs">
                <h6 style="margin-top: 5px;">Job Ads</h6>
            </div><!--  post-jobs -->
            <div class="nav-posts">
                <a href="job_ads.php" class="btn" style="font-size:12px;border-bottom: 3px solid #17a2b8;padding-bottom: 10px;text-align: left;color:black;">Posted Jobs</a>
                <a href="saved_drafts.php" class="btn" style="font-size:12px;border-bottom: 3px solid transparent;padding-bottom: 10px;text-align: left;color:black;">Saved Drafts</a>
                <a href="add_post_job.php" class="btn btn-info" style="margin-top: -10px;font-size: 12px">Create Job Ad</a>
            </div><!-- nav-posts -->
        </div><!-- end col-lg-12 mt-5 pt-3 pl-4 bg-white -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="welcome-job text-center">
                <i class="mdi mdi-briefcase" style="font-size: 150px;color: #909090;"></i>
                <h1 class="h1 text-muted" style="margin-top: -10%;">Welcome</h1>
                <p class="lead text-muted font-weight-light">There are currently no job ads. Get started now.
                   <a href="add_post_job.php"> Create Job Ads</a> now.</p>
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
