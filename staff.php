<?php include 'header.php'?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Staff</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff List and Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
							<br/>
									<div class="col-lg-4">
                                    <button class="btn btn-success btn-block">Add</button>
									</div>
									<div class="col-lg-4">
									<button class="btn btn-info btn-block">Edit</button>
									</div>
									<div class="col-lg-4">
									<button class="btn btn-danger btn-block">Delete</button>
									</div>
									<br/>
									<div class="table-responsive">
									
									</div>
									<table class="table table-hover">
										<thead>
											<tr>
												<td>Username</td>
												<td>Name</td>
												<td>Access Level</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Librarian</td>
												<td>Librarian Name</td>
												<td>Administrator</td>
											</tr>
											<tr>
												<td>Volunteer</td>
												<td>Volunteer Name</td>
												<td>Staff</td>
											</tr>
											<tr>
												<td>Volunteer</td>
												<td>Volunteer Name</td>
												<td>Staff</td>
											</tr>
											<tr>
												<td>Volunteer</td>
												<td>Volunteer Name</td>
												<td>Staff</td>
											</tr>
										</tbody>
									</table>
									
                                </div>
								<div class="col-lg-6">
									<div class="panel panel-default">
										<div class="panel-heading">
											Details
										</div>
										<div class="panel-body">
											<form role="form">
												<div class="form-group">
													<label>Username:</label>
													<input class="form-control">
													<p class="help-block">Enter username here.</p>
												</div>
												<div class="form-group">
													<label>Name:</label>
													<input class="form-control">
													<p class="help-block">Enter name here.</p>
												</div>
												<div class="form-group">
													<label>Address:</label>
													<input class="form-control">
													<p class="help-block">Enter address here.</p>
												</div>
												<div class="form-group">
													<label>Phone Number:</label>
													<input class="form-control">
													<p class="help-block">Enter phone number here.</p>
												</div>
												<div class="form-group">
													<label>Email Address:</label>
													<input class="form-control">
													<p class="help-block">Enter email here.</p>
												</div>
												<div class="form-group">
													<label>Comments:</label>
													<textarea class="form-control" rows="4"></textarea>	
													<p class="help-block">Enter comments here.</p>
												</div>
												<div class="form-group">
													<label>Access Level:</label>
													<select class="form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
													<p class="help-block">Enter access level here.</p>
												</div>
												<div class="form-group">
													<label>Contact Person:</label>
													<input class="form-control">
													<p class="help-block">Enter contact person here.</p>
												</div>	
												<button type="submit" class="btn btn-default">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</form>
										</div>
									</div>
								</div>                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
<?php include 'footer.php'?>