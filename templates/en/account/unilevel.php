	<div id="left-nav">
		<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
		<ul>
			<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
			<li><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
			<li><a href="../account/sales.php"><i class="icon icon-th-list"></i> <span>Sales</span><span class="label">{update}</span></a></li>
			<li><a href="../account/binary.php"><i class="icon icon-pencil"></i> <span>Binary</span><span class="label">{update}</span></a></li>
			<li class="active"><a href="../account/unilevel.php"><i class="icon icon-th"></i> <span>Uni-Level</span><span class="label">{update}</span></a></li>
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
			<h1>Unilevel | <small> <?php echo $_SESSION['user_name'];?></small></h1>
		</div>
		<div id="follow-up">
			<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
			<a href="../account/unilevel.php" class="current">Unilevel </a>
		</div>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
		</div>
	<!-- ################################################################################################### -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">
						<div class="span6">
							<div class="frame-box">
								<div class="frame-title">
									<span class="icon">
										<i class="icon-th"></i>
									</span>
									<h5>Unilevel Information</h5>
								</div><!-- /END/ .frame-title -->
								<div class="frame-content nopadding">
									<table class="table table-hover">
										<thead>
											<tr>
											<th>Title</th>
											<th>Info</th>
											</tr>
										</thead>
						              <tbody>
						                <tr>
						                  <td><strong>User Id:</strong></td>
						                  <td><?php echo $_SESSION['user_id'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>User Name:</strong></td>
						                  <td><?php echo $_SESSION['user_name'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Actual Rank:</strong></td>
						                  <td>{rank}</td>
						                </tr>
						                <tr>
						                  <td><strong>Remain Next Rank:</strong></td>
						                  <td>{rank PV remains}</td>
						                </tr>
						                <tr>
						                  <td><strong>New Affiliates Month:</strong></td>
						                  <td>{affiliates this month}</td>
						                </tr>
					                	<tr>
						                  <td><strong>Total Affiliates:</strong></td>
						                  <td><?php echo $unilevel_uid_count;?></td>
						                </tr>
					                	<tr>
						                  <td><strong>Total PV Month:</strong></td>
						                  <td>0<?php //echo $unilevel_pv;?></td>
						                </tr>
						              </tbody>
						            </table>
								</div><!-- /END/ .frame-content -->
							</div><!-- /END/ .frame-box -->
						</div><!-- /END/ .fspan6 -->

						<div class="span6">
							<div class="frame-box">
								<div class="frame-title">
									<span class="icon">
										<i class="icon-th"></i>
									</span>
									<h5>Levels Information</h5>
								</div><!-- /END/ .frame-title -->
								<div class="frame-content nopadding">
									<table class="table table-condensed">
					              <thead>
					                <tr>
					                  <th>Level</th>
					                  <th>Affiliates</th>
					                  <th>PV</th>
					                  <th>Payable %</th>
					                </tr>
					              </thead>
					              <tbody>
					                <tr>
					                  <td>1</td>
					                  <td><?php echo $unilevel_agg_cnt[1];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>2</td>
					                  <td><?php echo $unilevel_agg_cnt[2];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>3</td>
					                  <td><?php echo $unilevel_agg_cnt[3];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>4</td>
					                  <td><?php echo $unilevel_agg_cnt[4];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>5</td>
					                  <td><?php echo $unilevel_agg_cnt[5];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>6</td>
					                  <td><?php echo $unilevel_agg_cnt[6];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>7</td>
					                  <td><?php echo $unilevel_agg_cnt[7];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>8</td>
					                  <td><?php echo $unilevel_agg_cnt[8];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					                <tr>
					                  <td>9</td>
					                  <td><?php echo $unilevel_agg_cnt[9];?></td>
					                  <td>{pv}</td>
					                  <td>{% value if achieve}</td>
					                </tr>
					              </tbody>
					            	</table>
								</div><!-- /END/ .frame-content -->
							</div><!-- /END/ .frame-box -->
						</div><!-- /End/ .span6 -->
					</div> <!-- /End/ .row-fluid -->
				</div><!-- /End/ .span12 -->
			</div><!-- /End/ .row-fluid -->
			<div class="row-fluid">
			  	<div class="span12">
			  		<!-- level-1 -->
			  		<div class="accordion lvl_list" id="uni-collpase">
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-1" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 1</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-1">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-1 -->
						<!-- level-2 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-2" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 2</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-2">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-2 -->
						<!-- level-3 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-3" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 3</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-3">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-3 -->
						<!-- level-4 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-4" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 4</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-4">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-4 -->
						<!-- level-5 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-5" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 5</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-5">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-5 -->
						<!-- level-6 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-6" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 6</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-6">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-6 -->
						<!-- level-7 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-7" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 7</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-7">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-7 -->
						<!-- level-8 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-8" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 8</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-8">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-8 -->
						<!-- level-9 -->
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#unilevel-9" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Level 9</h5>
				                    </a>
				                    <span class="label">{levelpv} PV</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="unilevel-9">
				                <div class="frame-content nopadding lvl_body">
									<table class="table table-bordered table-striped">
									<thead>
									<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Qualified</th>
									<th>Pv Generated</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>	
								</div><!-- /End/ .frame content-->
							</div><!-- /End/ .accordion-body-->
						</div><!-- /End/ .frame-box-->
						<!-- /END/ level-9 -->
					</div><!-- /END/ .accordion -->
				</div> <!-- /End/ .span12-->
			</div><!-- /End/ .row-fluid -->
		</div> <!-- /End/ .container-->
	</div> <!-- /End/ .content-->
					

	<div class="footer">
		<div class="container">
			This is the footer
		</div>
	</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="../js/account/jquery-ui-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/account/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
</body>
</html>

				

