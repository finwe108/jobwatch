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
                          <h1 class="main-title float-left">Registered Employers</h1>
                          <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Employers</li>
                          </ol>
                          <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
            <!-- end row -->
            
              <div class="card mb-3">
                <div class="card-header">
                  <h3><i class="fa fa-table"></i> Manage Employers<span class="float-right"><a href="#" class=" turquoise-text hover-greensea-text"><i class="fa fa-user-circle"></i> New Employer</a></span></h3>
                </div>
                  
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                      <tr>
                        <th>Company</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Verification</th>
                        <th>Action</th>
                      </tr>
                    </thead>                    
                    <tbody>                      
                      <tr>
                        <td>Airi Satou</td>
                        <td>Airi Satou</td>
                        <td>airisatou@gmail.com</td>
                        <td>09473080103</td>
                        <td>level 1</td>
                        <td>
                          <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_employee_01"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_employee_01">
                            <div class="modal-dialog">

                              <div class="modal-content">
                                <form action="#" method="post">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Employer</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-primary" type="button">Edit Employer</button>
                                  </div>
                                </form>
                              </div>

                            </div>
                          </div>

                          <a href="Javascript:deleteRecord_10('10');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          <script>
                            function deleteRecord_10(RecordId){
                              if (confirm('Confirm delete')) {
                                window.location.href = '#';
                              }
                            }
                          </script>
                        </td>
                      </tr>                      
                      <tr>
                        <td>Yuri International</td>
                        <td>Yuri Berry</td>
                        <td>yuri123@yahoo.com</td>
                        <td>09166741023</td>
                        <td>unverified</td>
                        <td>
                          <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_employee_01"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_employee_01">
                            <div class="modal-dialog">

                              <div class="modal-content">
                                <form action="#" method="post">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Employer</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Category title (required)</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-primary" type="button">Edit Employer</button>
                                  </div>
                                </form>
                              </div>

                            </div>
                          </div>

                          <a href="Javascript:deleteRecord_10('10');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          <script>
                            function deleteRecord_10(RecordId){
                              if (confirm('Confirm delete')) {
                                window.location.href = '#';
                              }
                            }
                          </script>
                        </td>
                      </tr>
                      <tr>
                        <td>ARamos Enterprises</td>
                        <td>Angelica Ramos</td>
                        <td>angel@ramosent.com</td>
                        <td>09166702004</td>
                        <td>level 2</td>
                        <td>
                          <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_employee_02"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_employee_02">
                            <div class="modal-dialog">

                              <div class="modal-content">
                                <form action="#" method="post">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Employer</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Company</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Contact Person</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Phone</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Verification</label>
                                          <input type="text" name="title" class="form-control" required />
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-primary" type="button">Edit Employer</button>
                                  </div>
                                </form>
                              </div>

                            </div>
                          </div>

                          <a href="Javascript:deleteRecord_10('6');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          <script>
                            function deleteRecord_10(RecordId){
                              if (confirm('Confirm delete')) {
                                window.location.href = '#';
                              }
                            }
                          </script>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                  
                </div>                            
              </div><!-- end card-->    


              
              
              <!-- end row -->
              
              
               



            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->
    
<?php include_layout_template('admin-footer.php'); ?>