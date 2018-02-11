<?php include_once('../../includes/initialize.php'); ?>

<?php include_layout_template('admin-header.php'); ?> 
  
  <!-- Left Sidebar -->
<?php include_layout_template('admin-sidebar.php'); ?>
  <!-- End Sidebar --> 



    <div class="content-page">
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">
          
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                          <h1 class="main-title float-left">Dashboard</h1>
                          <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                          <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
            <!-- end row -->

            
              <div class="row">
                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder peterriver">
                          <i class="fa fa-user-circle float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Employers</h6>
                          <h1 class="m-b-20 text-white counter">1,587</h1>
                          <span class="text-white">15 New Employers</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder sunflower">
                          <i class="fa fa-user float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Job Seekers</h6>
                          <h1 class="m-b-20 text-white counter">250</h1>
                          <span class="text-white">Bounce rate: 25%</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder belizehole">
                          <i class="fa fa-cog float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Jobs</h6>
                          <h1 class="m-b-20 text-white counter">120</h1>
                          <span class="text-white">25 New Job Postings</span>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                      <div class="card-box noradius noborder bg-danger alizaren">
                          <i class="fa fa-bell-o float-right text-white"></i>
                          <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
                          <h1 class="m-b-20 text-white counter">58</h1>
                          <span class="text-white">5 New Alerts</span>
                      </div>
                  </div>
              </div>
              <!-- end row -->


              
              <div class="row">
              
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">            
                    <div class="card mb-3">
                      <div class="card-header">
                        <h3><i class="fa fa-cogs"></i> Jobs Served</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                      </div>
                        
                      <div class="card-body">
                        <canvas id="lineChart"></canvas>
                      </div>              
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->          
                  </div>
                  
              <!-- messages -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">           
                    <div class="card mb-3">
                      <div class="card-header">
                        <h3><i class="fa fa-envelope-o"></i> Latest messages</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>
                        
                      <div class="card-body">
                        
                        <div class="widget-messages nicescroll" style="height: 400px;">
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user1.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">John Doe</p>
                                    <p class="message-item-msg">Hello. I want to buy your product</p>
                                    <p class="message-item-date">11:50 PM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user2.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Ashton Cox</p>
                                    <p class="message-item-msg">Great job for this task</p>
                                    <p class="message-item-date">14:25 PM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user3.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Colleen Hurst</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">13:20 PM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user4.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Fiona Green</p>
                                    <p class="message-item-msg">Nice to meet you</p>
                                    <p class="message-item-date">15:45 PM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user5.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Donna Snider</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user6.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Garrett Winters</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user6.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Herrod Chandler</p>
                                    <p class="message-item-msg">Hello! I'm available for this job</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user7.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Jena Gaines</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user8.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Airi Satou</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="message-item">
                                    <div class="message-user-img"><img src="../images/avatars/user9.png" class="avatar-circle" alt=""></div>
                                    <p class="message-item-user">Brielle Williamson</p>
                                    <p class="message-item-msg">I have a new project for you</p>
                                    <p class="message-item-date">15:45 AM</p>
                                  </div>
                                </a>
                              </div>
                        
                      </div>
                      <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                    </div><!-- end card-->          
                  </div>
                  <!-- end messages -->

              </div>
              <!-- end row -->
              
              
              <div class="row">

                <!-- workers' chart 6-col  -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="card mb-3">
                      <div class="card-header">
                        <h3><i class="fa fa-users"></i> Workers' Chart </h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                      </div>
                        
                      <div class="card-body">
                        <canvas id="doughnutChart"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->     
                  </div>
                  <!-- end workers' chart -->

                  <!-- employees analytics -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">            
                    <div class="card mb-3">
                      <div class="card-header">
                        <h3><i class="fa fa-user-circle"></i> Employees Analytics</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                      </div>
                        
                      <div class="card-body">
                        <canvas id="pieChart"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->          
                  </div>
                  <!-- end employees analytics -->

              
              </div>      



            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->
    
<?php include_layout_template('admin-footer.php'); ?>