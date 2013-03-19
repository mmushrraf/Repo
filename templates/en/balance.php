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
		<li class="active">
			<a href="../account/balance.php"><i class="icon icon-signal"></i> <span>Balance</span><span class="label">{update}</span></a>
		</li>
	</ul>
</div><!-- /END/ .left-nav -->


<div id="content">
	<div id="content-header">
		<h1>Balance | <small> <?php echo $_SESSION['user_name'];?></small></h1>
	</div>
	<div id="follow-up">
		<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
		<a href="../account/balance.php" class="current">Balance </a>
	</div>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
	</div>
<!-- ################################################################################################### -->
	<div class="container-fluid">

		<div class="row-fluid">
			<div class="span12 center" style="text-align: center;">
				<a class="btn btn-large bal-link" href="#"><i class="icon icon-download-alt"></i> Add Cash</a>
				<a class="btn btn-large bal-link" href="#"><i class="icon icon-share"></i> Withdraw Cash</a>
				<a class="btn btn-large bal-link" href="#"><i class="icon icon-edit"></i> Subscription Payment</a>
				<a class="btn btn-large bal-link" href="../account/statement.php"><i class="icon icon-tasks"></i> Statement</a>
			</div> <!-- /End/ .span12-->
		</div><!-- /End/ .row-fluid -->

		<div class="row-fluid">
   			<div class="frame-box">
				<div class="frame-title">
				    <ul class="nav nav-tabs">
				        <li class="active"><a data-toggle="tab" href="#tab1">My Balance</a></li>
				        <li><a data-toggle="tab" href="#tab2">Week Commissions</a></li>
				        <li><a data-toggle="tab" href="#tab3">Month Commissions</a></li>
				    </ul>
				</div><!-- /END/ .frame-title -->
				<div class="frame-content tab-content">
				    <div id="tab1" class="tab-pane active">
				    	<div class="frame-box">
							<div class="frame-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Balance</h5>
							</div><!-- /END/ .frame-title -->
							<div class="frame-content">
								<table class="table table-condensed table-bordered">
									<thead>
										<tr>
										<th>Actual Balance</th>
										<th>Min Amount to Retire</th>
										</tr>
									</thead>
						              <tbody>
						                <tr>
						                  <td><strong>{balance} €</strong></td>
						                  <td><strong>100 €</strong></td>
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
								<h5>Week Commissions</h5>
							</div><!-- /END/ .frame-title -->
							<div class="frame-content">
								<table class="table table-condensed table-bordered">
									<thead>
										<tr>
										<th>Bonus No</th>
										<th>Ammount</th>
										<th>Date</th>
										</tr>
									</thead>
						              <tbody>
						                <tr>
						                  <td>{bonus no}</td>
						                  <td>{ammount} €</td>
						                  <td>{date} *dd-mm-yyyy*</td>
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
								<h5>Month Commissions</h5>
							</div><!-- /END/ .frame-title -->
							<div class="frame-content">
								<table class="table table-condensed table-bordered">
									<thead>
										<tr>
										<th>Bonus No</th>
										<th>Ammount</th>
										<th>Date</th>
										</tr>
									</thead>
						              <tbody>
						                <tr>
						                  <td>{bonus no}</td>
						                  <td>{ammount} €</td>
						                  <td>{date} *dd-mm-yyyy*</td>
						                </tr>              	                
					    			 </tbody>
				    			</table>
							</div><!-- /END/ .frame-content --> 
						</div><!-- /END/ .frame-box --> 
				    </div><!-- /END/ #tab3 -->
				</div>  <!-- /END/ .tab-content -->                          
			</div><!-- /END/ .frame-box -->
	   </div><!-- /END/ .row-fluid -->
	</div><!-- /End/ .container-fluid -->
</div><!-- /End/ #content -->

<div class="footer">
	<div class="container">
		This is the footer
	</div>
</div>
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>



</body>
</html>

