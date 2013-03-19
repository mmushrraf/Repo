	<div id="left-nav">
		<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
		<ul>
			<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
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
			<h1>Statement | <small> <?php echo $_SESSION['user_name'];?></small></h1>
		</div>
		<div id="follow-up">
			<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
			<a href="../account/balance.php" class="current">Balance</a>
			<a href="../account/statement.php" class="current">Statement</a>
		</div>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
		</div>
	<!-- ################################################################################################### -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="btn">
					<form class="form-inline">
						<label for="from-date">From: <input type="text" id="from-date"></label>
						<label for="to-date">To: <input type="text" id="to-date"></label>
						<button class="btn btn-" type="submit">Get data</button>
					</form>
				</div>
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Maximun 15 days range</strong> Please, insert dates withing 15 days?
				</div>
				<div class="frame-box">
					<div class="frame-title">
						<span class="icon">
							<i class="icon-refresh"></i>
						</span>
						<h5>Statement</h5>
					</div><!-- /END/ .frame-title -->
					<div class="frame-content nopadding">
						<table class="table table-bordered data-table">
							<thead>
							<tr>
							<th>Transaction ID</th>
							<th>Date</th>
							<th>Description</th>
							<th>Type</th>
							<th>Amount</th>
							<th>Balance</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>{trans_ID}</td>
							<td>trans_date}</td>
							<td>{Description of the movement like. If set up table for it I would add the diffentent transactions}</td>
							<td>{income or outgoings}</td>
							<td>{value}</td>
							<td>{balance at that point}</td>
							</tr>
							</tbody>
						</table> 
					</div><!-- /END/ .frame-content -->                        
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


