<?php include 'header.php'?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Library Schedule</h1>
                </div>
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit/Update Library Schedule
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
										<div class="form-group">
                                            <label>Day</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter day here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Opening Time</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter opening time here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Closing Time</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter closing time here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Is this schedule enabled?</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Enabled
                                                </label>
                                            </div>
										</div>
										
										<div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" rows="4"></textarea>
											
                                        </div>
										<button type="submit" class="btn btn-default">Save</button>
									
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

<?php include 'footer.php'?>