<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add user</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
										<h1>Basic Information</h1>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter username here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control">
                                            <p class="help-block">Enter password here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Repeat Password</label>
                                            <input type="password" class="form-control">
                                            <p class="help-block">Enter password again.</p>
                                        </div>
										<div class="form-group">
                                            <label>First name</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter first name here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter last name here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter e-mail address here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter phone number here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter mobile phone number here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Notes</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Access ID</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Is this user active?</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Active
                                                </label>
                                            </div>
										</div>
										<div class="form-group">
                                            <label>Outstanding bonds</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter outstanding bonds here.</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
										<a href="memberlist.php"class="btn btn-default">Back</a>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Address</h1>
                                    
                                        <div class="form-group">
                                            <label>House/Apt Number</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter house/apartment number here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Building</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter building here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Street</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter street here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Suburb</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter suburb here.</p>
                                        </div>
										<div class="form-group">
                                            <label>City</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
											<p class="help-block">Select city.</p>
                                        </div>
										<div class="form-group">
                                            <label>Post code</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter post code here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
											<p class="help-block">Select country.</p>
                                        </div>
                                    
                                    <h1>Emergency Contact Information</h1>
                                    
                                        <div class="form-group">
                                            <label>Contact person</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter contact person name here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Contact person mobile number</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter contact person's mobile number here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Contact person email address</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter contact person's e-mail address here.</p>
                                        </div>
										
                                    </form>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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

<?php include 'footer.php'?>