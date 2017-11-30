<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Carousel Toys</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Carousel Toys                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
								<div class="col-lg-6">
									<h3>Current Carousel Images</h3>
									<div>
										<label>Image 1:</label><br/>
										<img src="img/toys1.jpg"></img>
									</div>
									<div>
										<label>Image 2:</label><br/>
										<img src="img/toys2.jpg"></img>
									</div>
									<div>
										<label>Image 3:</label><br/>
										<img src="img/toys3.jpg"></img>
									</div>
								</div>
								
								<div class="col-lg-6">
									<h3>Change Images</h3>
									<form role="form">
										<div class="form-group">
                                            <label>Image 1:</label>
                                            <input type="file">
                                        </div>
										<div class="form-group">
                                            <label>Image 2:</label>
                                            <input type="file">
                                        </div>
										<div class="form-group">
                                            <label>Image 3:</label>
                                            <input type="file">
                                        </div>
										<button type="submit" class="btn btn-default btn-block">Submit</button>
									</form>
								</div>
							</div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'footer.php'?>