	<div id="left-nav">
		<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
		<ul>
			<li class="active"> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
			<li><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
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
			<h1>MiEdaqua | <small> <?php echo $_SESSION['user_name'];?></small></h1>
		</div>
		<div id="follow-up">
			<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
		</div>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
		</div>
	<!-- ################################################################################################### -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12 center" style="text-align: center;">					
					
				</div>	
			</div>
			<div class="row-fluid">
				<div class="span12">
									
				</div>
			</div>
		</div>
		
	</div>
	<div class="footer">
		<div class="container">
			This is the footer
		</div>
	</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../lib/jsPlugins/jquery-ui-1.9.0.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/select2.min.js"></script>
<script type="text/javascript" src="../js/account/dataTable.init.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/account/uniform.init.js"></script>
</body>
</html>

