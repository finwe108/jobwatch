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
								<h1 class="main-title float-left">Categories</h1>
								<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Home</li>
								<li class="breadcrumb-item active">Categories</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->


			
			
					<div class="row">
								
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
									
							<div class="card mb-3">
							
								<div class="card-header">
								<span class="pull-right"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_category"><i class="fa fa-plus" aria-hidden="true"></i> Add new category</button></span>
								<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_add_category">
							<div class="modal-dialog">
							<div class="modal-content">
								
								<form action="#" method="post">

												
								<div class="modal-header">
								<h5 class="modal-title">Add new category</h5>
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>          	
								</div>
									
								<div class="modal-body">                
													
									<div class="row">
										<div class="col-lg-12">
										<div class="form-group">
										<label>Category title (required)</label>
										<input class="form-control" name="title" type="text" required />
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-12">
										<div class="form-group">
										<label>Description (optional)</label>
										<textarea class="form-control" name="description" rows="5"></textarea>
										</div>
										</div>  
									</div>
													
									<div class="row">					                
										<div class="col-lg-6">
										<div class="form-group">
										<label>Active</label>
										<select name="active" class="form-control">
										<option value="1">YES</option>
										<option value="0">NO</option>
										</select>
										</div>
										</div>
									
									</div>
									
								</div>             
								
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Add category</button>
								</div>
									
								</form>	
								
							</div>
						</div>
					</div> 
					<h3><i class="fa fa-sitemap"></i> All categories (2 categories)</h3>								
					</div>
					<!-- end card-header -->	
								
					<div class="card-body">
								
								
						
							<table class="table table-bordered">
							<thead>
							  <tr>
								<th>Category details</th>
								<th style="width:150px">Postings</th>
								<th style="width:120px">Actions</th>
							  </tr>
							</thead>
							<tbody>
					
							<tr>
							
							<td>
							<strong>Blog</strong><br />
							<small>Our blog articles</small>
							</td>
							
							<td>2</td>
							
							<td>
								<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_category_10"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_category_10">
								<div class="modal-dialog">
								<div class="modal-content">
									
									<form action="#" method="post">

													
									<div class="modal-header">
									<h5 class="modal-title">Edit category</h5>
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>          	
									</div>
										
									<div class="modal-body">                
														
										<div class="row">
											<div class="col-lg-12">
											<div class="form-group">
											<label>Category title (required)</label>
											<input class="form-control" name="title" type="text" value="Blog" required />
											</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-12">
											<div class="form-group">
											<label>Description (optional)</label>
											<textarea class="form-control" name="description" rows="5">Our blog articles</textarea>
											</div>
											</div>  
										</div>
														
										<div class="row">					                
											<div class="col-lg-6">
											<div class="form-group">
											<label>Active</label>
											<select name="active" class="form-control">
											<option selected="selected" value="1">YES</option>
											<option  value="0">NO</option>
											</select>
											</div>
											</div>
										
										</div>
										
									</div>             
									
									<div class="modal-footer">
										<button type="button" class="btn btn-primary">Edit category</button>
									</div>
										
									</form>	
									
									</div>
								</div>
							</div> 
														<a href="javascript:deleteRecord_10('10');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
														<script>
														function deleteRecord_10(RecordId)
														{
															if (confirm('Confirm delete')) {
																window.location.href = '#';
															}
														}
														</script>
													</td>
												</tr>
																	<tr >
													
													<td>
													<strong>News</strong>							<br />
													<small>Latest news about our company</small>
													</td>
													
													<td>6</td>
													
													<td>
														<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_category_6"><i class="fa fa-pencil" aria-hidden="true"></i></a>
														<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_category_6">
														<div class="modal-dialog">
															<div class="modal-content">
																
																<form action="#" method="post">

																				
																<div class="modal-header">
																<h5 class="modal-title">Edit category</h5>
																<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>          	
																</div>
																	
																<div class="modal-body">                
																					
																	<div class="row">
																		<div class="col-lg-12">
																		<div class="form-group">
																		<label>Category title (required)</label>
																		<input class="form-control" name="title" type="text" value="News" required />
																		</div>
																		</div>
																	</div>
																	
																	<div class="row">
																		<div class="col-lg-12">
																		<div class="form-group">
																		<label>Description (optional)</label>
																		<textarea class="form-control" name="description" rows="5">Latest news about our company</textarea>
																		</div>
																		</div>  
																	</div>
																					
																	<div class="row">					                
																		<div class="col-lg-6">
																		<div class="form-group">
																		<label>Active</label>
																		<select name="active" class="form-control">
																		<option selected="selected" value="1">YES</option>
																		<option  value="0">NO</option>
																		</select>
																		</div>
																		</div>
																	
																	</div>
																	
																</div>             
																
																<div class="modal-footer">
																	<button type="button" class="btn btn-primary">Edit category</button>
																</div>
																	
																</form>	
																
															</div>
														</div>
													</div> 
														<a href="javascript:deleteRecord_6('6');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
														<script>
														function deleteRecord_6(RecordId)
														{
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
										<!-- end card-body -->								
											
									</div>
									<!-- end card -->					

								</div>
								<!-- end col -->	
																	
							</div>
							<!-- end row -->	



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
<?php include_layout_template('admin-footer.php'); ?>