
<div id="left-nav">
	<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
	<ul>
		<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
		<li class="active"><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
		<li><a href="../account/sales.php"><i class="icon icon-th-list"></i> <span>Sales</span><span class="label">{update}</span></a></li>
		<li><a href="../account/binary.php"><i class="icon icon-pencil"></i> <span>Binary</span><span class="label">{update}</span></a></li>
		<li><a href="../account/unilevel.php"><i class="icon icon-th"></i> <span>Uni-Level</span><span class="label">{update}</span></a></li>
		<li><a href="#"><i class="icon icon-tint"></i> <span>Pool</span><span class="label">{update}</span></a></li>
		<li class="submenu">
			<a href="#"><i class="icon icon-file"></i> <span>Reports</span> <span class="label">{update}</span></a>
			<ul>
				<li><a href="#">Charts</a></li>
				<li><a href="#">Report List</a></li>
				<li><a href="#">Invoices</a></li>
			</ul>
		</li>
		<li>
			<a href="../account/balance.php"><i class="icon icon-signal"></i> <span>Balance</span><span class="label">{update}</span></a>
		</li>
	</ul>
</div><!-- /END/ .left-nav -->


<div id="content">
	<div id="content-header">
		<h1>Shopping | <small> <?php echo $_SESSION['user_name'];?></small></h1>
	</div>
	<div id="follow-up">
		<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
		<a href="../account/shopping.php" class="current">Shopping</a>
	</div>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
	</div>
<!-- ################################################################################################### -->
	<div class="container-fluid">
		<div class="row-fluid">
       		 <div class="span12">
				<div class="frame-box">
					<div class="frame-title">
						<span class="icon">
							<i class="icon-shopping-cart"></i>
						</span>
						<h5>Edaqua Shopping</h5>
					</div><!-- /END/ .frame-title -->
					<div class="frame-content">
						<form>
		 					<!-- /START/ product listing-->
				            <ul class="thumbnails">
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-50"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-1"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/g/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-40"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-2"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-30"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-3"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/g/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-20"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-4"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-10"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-5"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/g/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-0"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-6"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-50"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-7"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				                <li class="span3">
				                    <div class="thumbnail">
				                        <img alt="" src="http://placekitten.com/g/260/180">
				                        <div class="caption">
				                            <h5>Product Name</h5>
				                            <p><span class="rating-static rating-40"></span></p>
				                            <p>In here would go a buncho detaris such as product description, amount to be delivered, pack sizes...etc</p>
				                            <p><a class="btn btn-primary" href="#modal-buy" role="button" data-toggle="modal" id="pack-display-8"><i class="icon-shopping-cart icon-white"></i> €36.90 Buy</a> </p>
				                        </div>
				                    </div>
				                </li>
				            </ul>
				            <!-- /END/ product listing -->

							<!-- Modal Password -->
							<div id="modal-buy" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							    <h3 id="modal-label">Edaqua Purchase</h3>
							  </div>
							  <div class="modal-body">
							    <p>Are you sure you want buy the selected product?</p>
							  </div>
							  <div class="modal-footer">
							    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
							    <button class="btn btn-primary">Buy</button>
							  </div>
							</div>
							<!-- /END/ #modal-password -->			            
			        	</form>
		            </div><!-- ./END/ .frame-content -->
	            </div><!-- /END/ .frame-box -->
			</div><!-- /END/ .span12 -->
		</div><!-- /END/ .row-fluid -->


	</div><!-- /End/ .container-fluid -->
</div><!-- /End/ #content -->


<div class="footer">
	<div class="container">
		This is the footer
	</div>
</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../lib/jsPlugins/jquery-ui-1.9.0.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/common/region.js"></script>
</body>
</html>

