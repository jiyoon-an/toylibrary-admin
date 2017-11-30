<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Child</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add/Edit Child
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
										<div class="form-group">
                                            <label>Member ID</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter first name here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter last name here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Birth Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter birth date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsGenders" id="optionsGenders1" value="option1" checked>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsGenders" id="optionsGenders2" value="option2">Female
                                                </label>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label>Special needs child?</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Yes
                                                </label>
                                            </div>
										</div>
										<button type="submit" class="btn btn-default">Submit</button>
									</form>
                                </div>
                                <!-- /.col-lg-12(nested) -->
                                
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