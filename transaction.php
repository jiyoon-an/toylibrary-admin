<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Transaction</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add/Edit Transaction
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
                                            <label>Transaction Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter transaction date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Details</label>
                                            <textarea class="form-control" rows="4"></textarea>	
                                        </div>
										<div class="form-group">
                                            <label>Staff ID</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
										</div>
										<div class="form-group">
                                            <label>Type</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter type here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Credit</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter credit here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Debit</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter debit here.</p>
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