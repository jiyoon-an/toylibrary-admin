<?php include 'header.php';?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Newsletter</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit/Create Newsletter
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Headline</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter newsletter headline here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" rows="4"></textarea>
											<p class="help-block">Enter newsletter content here.</p>
                                        </div>
                                                                               
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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

<?php include 'footer.php';?>