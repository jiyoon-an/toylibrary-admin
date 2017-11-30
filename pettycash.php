<?php include 'header.php'?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Petty Cash Balance</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Petty Cash
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form">
									<div class="col-lg-12">
									<table class="table table-hover">
										
											<tr>
												<td>Last Balanced:</td>
												<td><input class="form-control" placeholder="Date last balanced"></td>
												<td><input class="form-control" placeholder="Staff name"></td>
												<td><button class="btn btn-default btn-block">Mark Balanced</button>
											</tr>
											<tr>
												<td></td>
												<td>Since Last Balance</td>
												<td>Today</td>
												<td>New</td>
											</tr>
											<tr>
												<td>Opening Balance:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td></td>
											</tr>
											<tr>
												<td>+ Bank Withdrawal:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td></td>
											</tr>
											<tr>
												<td>+ Payments:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
											</tr>
											<tr>
												<td>- Refunds:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td></td>
											</tr>
											<tr>
												<td>- Bank Deposit:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
											</tr>
											<tr>
												<td>+ Manual Adjustment:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
											</tr>
											<tr>
												<td>= Closing Balance:</td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td><input class="form-control" placeholder="$00.00"></td>
												<td></td>
											</tr>
										
										
									</table>
									
								<button type="submit" class="btn btn-default">OK</button>
										<button class="btn btn-default">Cancel</button>
										</div>
								</form>
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