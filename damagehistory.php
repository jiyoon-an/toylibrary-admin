<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Damage History</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add/Edit Damage History
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
										<div class="form-group">
                                            <label>Toy ID</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
										</div>
										<div class="form-group">
                                            <label>Damage Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter damage date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Repair Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter repair date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Repairer</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter repairer here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Contact</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter contact here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" rows="4"></textarea>	
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