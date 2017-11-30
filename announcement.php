<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Announcement</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add/Edit Announcement
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
									<div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter title here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" rows="4"></textarea>	
                                        </div>
										<div class="form-group">
                                            <label>Start Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter start date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>End Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter end date here.</p>
                                        </div>
										<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Enabled
                                                </label>
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