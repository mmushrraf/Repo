	<div id="left-nav">
		<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
		<ul>
			<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
			<li><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
			<li class="active"><a href="../account/sales.php"><i class="icon icon-th-list"></i> <span>Sales</span><span class="label">{update}</span></a></li>
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
			<h1>Sales | <small> <?php echo $_SESSION['user_name'];?></small></h1>
		</div>
		<div id="follow-up">
			<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
			<a href="../account/sales.php" class="current">Sales</a>
		</div>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
		</div>
	<!-- ################################################################################################### -->
		<div class="container-fluid">
			<div class="row-fluid">
	   			<div class="frame-box">
					<div class="frame-title">
					    <ul class="nav nav-tabs">
					        <li class="active"><a data-toggle="tab" href="#tab1">My Clients</a></li>
					        <li><a data-toggle="tab" href="#tab2">Month Sales</a></li>
					        <li><a data-toggle="tab" href="#tab3">Month Wholesales</a></li>
					    </ul>
					</div><!-- /END/ .frame-title -->
					<div class="frame-content tab-content">
					    <div id="tab1" class="tab-pane active">
					    	<div class="frame-box">
								<div class="frame-title">
									<span class="icon">
										<i class="icon-th"></i>
									</span>
									<h5>Clients View List</h5>
								</div><!-- /END/ .frame-title -->
								<div class="frame-content nopadding">
									<table class="table table-bordered data-table">
										<thead>
										<tr>
										<th>Client ID</th>
										<th>Name</th>
										<th>Join Date</th>
										<th>Contact Info</th>
										</tr>
										</thead>
										<tbody>
										<tr>
										<td>{userID}</td>
										<td>{usrname & surname}</td>
										<td>{joindate}</td>
										<td>{contact_info//if usrinfo === true{displayinfo} else echo No Avalible}</td>
										</tr>
										</tbody>
									</table> 
								</div><!-- /END/ .frame-content --> 
							</div><!-- /END/ .frame-box --> 
					    </div><!-- /END/ #tab1 -->

					    <div id="tab2" class="tab-pane">
					    	<div class="frame-box">
								<div class="frame-title">
									<span class="icon">
										<i class="icon-th"></i>
									</span>
									<h5>Sales View List</h5>
								</div><!-- /END/ .frame-title -->
								<div class="frame-content nopadding">
									<table class="table table-bordered data-table">
									<thead>
									<tr>
									<th>Client ID</th>
									<th>Name</th>
									<th>Purchse Date</th>
									<th>Quantity</th>
									<th>PV</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td>{userID}</td>
									<td>{usrname & surname}</td>
									<td>{purchase_date}</td>
									<td>{Quantity}</td>
									<td>{PVs}</td>
									</tr>
									</tbody>
									</table> 
								</div><!-- /END/ .frame-content --> 
							</div><!-- /END/ .frame-box --> 
					    </div><!-- /END/ #tab2 -->
					    <div id="tab3" class="tab-pane">
					    	<div class="frame-box">
								<div class="frame-title">
									<span class="icon">
										<i class="icon-th"></i>
									</span>
									<h5>Wholesales View List</h5>
								</div><!-- /END/ .frame-title -->
								<div class="frame-content nopadding">
									<table class="table table-bordered data-table">
									<thead>
									<tr>
									<th>Client ID</th>
									<th>Name</th>
									<th>Purchse Date</th>
									<th>Quantity</th>
									<th>PV</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td>{userID}</td>
									<td>{usrname & surname}</td>
									<td>{purchase_date}</td>
									<td>{Quantity}</td>
									<td>{PVs}</td>
									</tr>
									</tbody>
									</table> 
								</div><!-- /END/ .frame-content --> 
							</div><!-- /END/ .frame-box --> 
					    </div><!-- /END/ #tab3 -->
					</div>  <!-- /END/ .tab-content -->                          
				</div><!-- /END/ .frame-box -->
		   </div><!-- /END/ .row-fluid -->
	   </div> <!-- /END/ .container -->
	</div><!-- /END/ .content -->

	<div class="footer">
		<div class="container">
			This is the footer
		</div>
	</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/select2.min.js"></script>
<script type="text/javascript" src="../js/account/dataTable.init.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/account/uniform.init.js"></script>
</body>
</html>


