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

        .card-col-1 {
            width: 30%;
            float: left;
            margin-left: 3%;
        }

        a:hover {
            text-decoration: none;
        }
        .fc th, .fc td, .fc hr, .fc thead, .fc tbody, .fc-row {
            border-color: #ddd !important;
            font-size: 12px;
        }
        .fc-day-number {
            font-size: 16px !important;
            margin-right: 10px;
        }
        #calendar {
            width: 100%;
            height: auto;
            border: 1px solid rgba(0,0,0,.125);

        }
        .fc-event {
            border:1px solid #dddddd !important;
            padding: 2px;
            /*font-size:15;*/
        }
        .fc-center {
            color: #264590;
        }
        .fc-toolbar.fc-header-toolbar {
            background: #ededed !important;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .fc-day-header.fc-widget-header {
            padding: 10px !important;
            background-color: #dddddd !important;
            color: #5f6881 !important;
            /*margin-top: -20px;*/
        }
        .fc-toolbar.fc-header-toolbar {
            margin-bottom: 0 !important;
        }
        a.nav-link, .dropdown-item {
            font-size: 12px !important;

        }
        .row.bg-light {
            height: 180px;
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
                            <img src="images/img_avatar5.png" class="img-fluid rounded-circle mr-2" width="32" alt="">
                            FLORDELYN MADUAY
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile_employee.php"><i class="mdi mdi-account" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> My Profile</a>
                            <a class="dropdown-item" href="setting.php"><i class="mdi mdi-settings" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> Setting</a>
                            <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout" style="margin-right: 15px;"
                                                                 aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container bg-white mt-5 p-5">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="font-weight-bold text-uppercase mb-4" style="margin-top: -20px;">Hi Flordelyn Maduay. Welcome to your dashboard</h5>
            <div class="row bg-light">
                <div class="col-md-6">
                    <h2 style="font-size: 18px;color:#808080;margin-top: 15%;margin-left: 5%">What would you like to do?</h2>
                </div>
                <div class="col-md-6 p-3">
                    <div class="bg-white card-col-1 text-center p-2 pb-4">
                        <a href="">
                            <i class="mdi mdi-cart" style="font-size: 72px;color:#1880c4;"></i>

                            <span style="display: block;margin-top:-15px;font-weight: bold;color: #1880c4;font-size:14px;">Purchase Credits</span>
                        </a>
                    </div><!-- end card-col-1 -->
                    <div class="bg-white card-col-1 text-center p-2 pb-4">
                        <a href="">
                            <i class="mdi mdi-clipboard-text" style="font-size: 72px;color:#1880c4;"></i>

                            <span style="font-size:14px;display: block;margin-top:-15px;font-weight: bold;color:#1880c4;">Job Ads</span>
                        </a>
                    </div><!-- end card-col-1 -->
                    <div class="bg-white card-col-1 text-center p-2 pb-4">
                        <a href="">
                            <i class="mdi mdi-magnify" style="font-size: 72px;color:#1880c4;"></i>

                            <span style="font-size:14px;display: block;margin-top:-15px;font-weight: bold;color:#1880c4;">Talent Search</span>
                        </a>
                    </div><!-- end card-col-1 -->
                </div><!-- col-md-6 p-5 -->
            </div><!-- row bg-light -->
        </div><!-- col-lg-12 -->
    </div><!-- row -->

    <div class="row mt-4">
        <div class="col-lg-4">
            <h3 class="font-weight-bold"
                style="font-size: 14px;border-bottom: 2px solid gray;padding-bottom: 10px;margin-bottom: 10px;">Upcoming
                Invite(s) <i class="mdi mdi-information-outline"></i></h3>
            <div class="invite">
                <div class="text-center bg-light mb-3">
                    <div class="card-body">
                        <i class="mdi mdi-image" style="font-size: 80px;color:gray"></i>
                        <h5 class="card-title" style="font-size: 14px">Looks like you haven't scheduled any invitations</h5>
                        <a href="#" class="btn btn-dark" style="font-size: 12px">Start inviting relevant candidates</a>
                    </div>
                </div>
            </div>
            <div class="invite bg-light">
                <div class="row">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="images/if_160_Desktop_183281.png" class="img-fluid ml-3 mt-3"
                                 style="width: 100px;" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 p-3">
                        <h4 style="color: #1880c4;font-size: 14px">Important: Security Notice</h4>
                        <p style="font-size: 14px">Keep your login details and password to yourself.</p>
                        <p style="font-size: 12px"><b>Don't share them with anyone.</b></p>
                    </div>

                </div>
            </div>
        </div><!-- end col-lg-4 -->
        <div class="col-lg-8">
            <div id="calendar"></div>
        </div>
    </div><!-- end row -->
</div><!-- end of container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/jquery.min.js"></script>
<script src='js/moment.min.js'></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2018-02-12',
            navLinks: true, // can click day/week names to navigate views
//            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2018-02-01',
                },
                {
                    title: 'Long Event',
                    start: '2018-02-07',
                    end: '2018-02-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-02-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-02-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2018-02-11',
                    end: '2018-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2018-02-12T10:30:00',
                    end: '2018-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2018-02-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2018-02-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2018-02-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2018-02-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2018-02-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2018-02-28'
                }
            ]
        });

    });

</script>
</body>
</html>
