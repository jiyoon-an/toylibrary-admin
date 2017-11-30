<?php include 'header.php';?>
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Toy</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Toy information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter name of toy here.</p>
                                        </div>
                                       <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3"></textarea>
											<p class="help-block">Enter description of toy here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Brand</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter brand of toy here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Age group</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Toy group</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Loan type</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Toy image</label>
                                            <input type="file">
                                        </div>
										<div class="form-group">
                                            <label>Shelf</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter shelf here.</p>
                                        </div>
										
									
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                    
                                        <div class="form-group">
                                            <label>Purchase date</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter purchase date here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Purchase from</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter purchase from information here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Purchase price</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter purchase price here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Donated by</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter name of donor here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" rows="3"></textarea>											
                                        </div>
										<div class="form-group">
                                            <label>Alert</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter alert information here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter status of toy here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Linked toys</label>
                                            <input class="form-control">
                                            <p class="help-block">Enter linked toys here.</p>
                                        </div>
										
										<button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
										<a class="btn btn-default" href="toylist.php">Back</a>
										
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

<?php include 'footer.php';?>