
<div id="left-nav">
	<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
	<ul>
		<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
		<li><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
		<li><a href="../account/sales.php"><i class="icon icon-th-list"></i> <span>Sales</span><span class="label">{update}</span></a></li>
		<li class="active"><a href="../account/binary.php"><i class="icon icon-pencil"></i> <span>Binary</span><span class="label">{update}</span></a></li>
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
		<h1>Binary | <small> <?php echo $_SESSION['user_name'];?></small></h1>
	</div>
	<div id="follow-up">
		<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
		<a href="../account/binary.php" class="current">Binary </a>
	</div>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
	</div>
<!-- ################################################################################################### -->
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

				<!-- /START/ account information -->

				<div class="span6">
		  			<div class="accordion" id="bin-collpase1">
			        	<div class="accordion-group frame-box">
			            	<div class="accordion-heading">
			                	<div class="frame-title">
			                    	<a data-parent="#bin-collapse1" href="#bin-frame1" data-toggle="collapse">
			                        	<span class="icon"><i class="icon-folder-open"></i></span><h5>Account Information</h5>
			                    	</a>
			                    	<span class="label">{user ID}</span>
			                	</div><!-- /End/ .frame-title-->
			           		</div><!-- /End/ .accordion-heading-->

			            	<div class="collapse accordion-body" id="bin-frame1">
								<div class="frame-content nopadding">
									<table class="table table-condensed table-bordered">
						              <tbody>
						                <tr>
						                  <th>User Id:</th>
						                  <td><?php echo $_SESSION['user_id'];?></td>
						                </tr>
						                <tr>
						                  <th>User Name:</th>
						                  <td><?php echo $_SESSION['user_name'];?></td>
						                </tr>
						                <tr>
						                  <th>Plan Type:</th>
						                  <td>{Plan type}</td>
						                </tr>
						                <tr>
						                  <th>Binary Id:</th>
						                  <td>{binaryid}</td>
						                </tr>
						                <tr>
						                  <th>Qualify:</th>
						                  <td>{qualified/no-qualified}</td>
						                </tr>	
					                	<tr>
						                  <th>Total Affiliates:</th>
						                  <td><?php echo $binary_uid_count;?></td>
						                </tr>
					                	<tr>
						                  <th>Total VG:</th>
						                  <td><?php echo $binary_vg_right;?></td>
						                </tr>                	                
					    			 </tbody>
					    			</table>
								</div><!-- /END/ .frame-content -->
							</div><!-- /END/ .accordion-body -->
						</div><!-- /End/ .accordion-group-->
					</div><!-- /END/ .accordion -->							
				</div><!-- /End/ .span6 -->	

			<!-- /END/ account information -->


			<!-- /START/ bianry tools -->	

				<div class="span6">
			  		<div class="accordion" id="bin-collpase2">
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#bin-collapse2" href="#bin-frame2" data-toggle="collapse">
				                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Binary Tools</h5>
				                    </a>
				                    <span class="label">{user ID}</span>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="bin-frame2">
				                <div class="frame-content nopadding">
									<form id="bin_select" method="POST">
										<table class="table table-bordered">
											<thead><tr><th colspan="4">Binary Position Personal</th></tr></thead>
											<tbody>
												<tr>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="left" <?php if($binInsertPosition == 'left'){echo 'checked="checked"';}?>> Left</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="right" <?php if($binInsertPosition == 'right'){echo 'checked="checked"';}?>> Right</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="auto" <?php if($binInsertPosition == 'auto'){echo 'checked="checked"';}?>> Auto</label>
													</td>
													<td>
								                    <input type="hidden" name="change_bin" value="change" />
													<button type="submit" class="btn" value="submit" >Activate</button>
													</td>
												</tr>
											</tbody>
										</table>
									</form>

									<form id="bin_select_pro" method="POST">
										<table class="table table-bordered">
											<thead><tr><th colspan="6">Binary Position Profesional</th></tr></thead>
											<tbody>
												<tr>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="left" <?php if($binInsertPosition == 'left'){echo 'checked="checked"';}?>> Left</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="right" <?php if($binInsertPosition == 'right'){echo 'checked="checked"';}?>> Right</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="right" > Left-Right</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="right" > Right-Left</label>
													</td>
													<td>
													<label class="radio inline"><input type="radio" name="bin_select" value="auto" <?php if($binInsertPosition == 'auto'){echo 'checked="checked"';}?>> Auto</label>
													</td>
													<td>
								                    <input type="hidden" name="change_bin" value="change" />
													<button type="submit" class="btn" value="submit" >Activate</button>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
									<table class="table table-bordered">
										<thead><tr><th>ID Search</th></tr></thead>
										<tbody>
											<tr>
												<td>
													<div class="input-append">
														<form class="form-search">
															<input type="text" class="input-small" id="appendedInputButton">
															<button class="btn" type="button">Search</button>
														</form>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- /END/ .frame-content -->
							</div><!-- /END/ .accordion-body -->
						</div><!-- /End/ .accordion-group-->
					</div><!-- /END/ .accordion -->	   			
				</div><!-- /End/ .span6 -->

				<!-- /END/ binary tools -->

			</div><!-- /End/ .span12 -->
		</div> <!-- /End/ .row-fluid -->

		<!-- /START/ binary information -->

		<div class="row-fluid">
			<div class="span12">
		  		<div class="accordion" id="bin-collpase3">
			        <div class="accordion-group frame-box">
			            <div class="accordion-heading">
			                <div class="frame-title">
			                    <a data-parent="#bin-collapse3" href="#bin-frame3" data-toggle="collapse">
			                        <span class="icon"><i class="icon-folder-open"></i></span><h5>Binary Information</h5>
			                    </a>
			                    <span class="label">{user ID}</span>
			                </div><!-- /End/ .frame-title-->
			            </div><!-- /End/ .accordion-heading-->
			            <div class="collapse accordion-body" id="bin-frame3">
			                <div class="frame-content nopadding">
								<table class="table table-condensed table-bordered">
									<thead>
									<tr>
										<th></th>
										<th class="pro-left">Binary {bid ['left-account']}</th>
										<th class="per-main">Binary {bid ['main-account']}</th>
										<th class="pro-right">Binary {bid ['right-account']}</th>
									</tr>
									</thead>	
									<tbody>
									<tr>
										<th>Affiliates Left:</th>
										<td class="pro-left">{pro-left affiliates left}</td>
										<td class="per-main"><?php echo $binary_uid_left;?></td>
										<td class="pro-right">{pro-right affiliates left}</td>
									</tr>
									<tr>
										<th>Affiliates Right:</th>
										<td class="pro-left">{pro-left affiliates right}</td>
										<td class="per-main"><?php echo $binary_uid_right;?></td>
										<td class="pro-right">{pro-right affiliates right}</td>
									</tr>
									<tr>
										<th>VG Left:</th>
										<td class="pro-left">{pro-left VG left}</td>
										<td class="per-main"><?php echo $binary_vg_left;?></td>
										<td class="pro-right">{pro-right VG left}</td>
									</tr>
									<tr>
										<th>VG Right:</th>
										<td class="pro-left">{pro-left VG right}</td>
										<td class="per-main"><?php echo $binary_vg_right;?></td>
										<td class="pro-right">{pro-right VG right}</td>
									</tr>
									<tr>
									  <th>New Affiliates Week:</th>
									  <td class="pro-left">{pro-left affiliates this week}</td>
									  <td class="per-main">{per-main affiliates this week}</td>
									  <td class="pro-right">{pro-right affiliates this week}</td>
									</tr>	
									<tr>
									  <th>Week Affiliates Left:</th>
									  <td class="pro-left">{pro-left week_affiliates_left}</td>
									  <td class="per-main">{per-main week_affiliates_left}</td>
									  <td class="pro-right">{week_affiliates_left}</td>
									</tr>
									<tr>
									  <th>Week Affiliates Right:</th>
									  <td class="pro-left">{pro-left week_affiliates_right}</td>
									  <td class="per-main">{per-main week_affiliates_right}</td>
									  <td class="pro-right">{pro-right week_affiliates_right}</td>
									</tr>	                	                
									</tbody>
				    			</table>
							</div><!-- /END/ .frame-content -->
						</div><!-- /End/ .accordion-body-->	
					</div><!-- /END/ .accordion -->	
				</div><!-- /END/ .frame-box -->			    			
			</div><!-- /End/ .span12 -->			
		</div><!-- /End/ .row-fluid -->

		<!-- /START/ tree view -->
		<div class="row-fluid">
		  	<div class="span12">
		  		<div class="frame-box">
					<div class="frame-title">
						<span class="icon">
						<i class="icon-align-justify"></i>									
						</span>
						<h5>Baniry Tree View</h5>
						<div class="buttons">
						<form>
							<button class="btn inline btn-mini" type="submit"><i class="icon-chevron-up"></i>1 Level Up</button>
							<button class="btn inline btn-mini" type="submit"><i class="icon-user"></i> Original Position</button>
						</form>
						</div>
					</div>
					<div class="frame-content bin-bg">
						<div id="tree_view">
							<div id="level_0" class="tree_level">
								<div id="lvl_0_1" class="lvl_0">
									<div id="disp_1" class="display_lvl0">
										<div class="disp_info">
											<span >Free</span> 
										</div>
									</div><!--End disp_0-->
								</div><!--End level_0_1-->
							</div><!--End level_0-->
							<div id="level_1" class="tree_level">
								<div id="lvl_1_1" class="lvl_1">
									<div id="disp_2" class="display_lvl1">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_3-->
								</div><!--End level_0_1-->
								<div id="lvl_1_2" class="lvl_1">
									<div id="disp_3" class="display_lvl1">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_3-->
								</div><!--End level_0_2-->
							</div><!--End level_1-->
							<div id="level_2" class="tree_level">
								<div id="lvl_2_1" class="lvl_2">
									<div id="disp_4" class="display_lvl2">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_4-->
								</div><!--End level_2_1-->
								<div id="lvl_2_2" class="lvl_2">
									<a href="#" id="disp_5" class="display_lvl2">
		                           		<div class="disp_info">
		                           			<span></span>
											<span >Free</span> 
											<span></span>
			                            </div>
									</a><!--End disp_5-->
								</div><!--End level_2_2-->
								<div id="lvl_1_3" class="lvl_2">
										<div id="disp_6" class="display_lvl2">
		                           		<div class="disp_info">
		                           			<span></span>
											<span >Free</span> 
											<span></span>
			                            </div>
									</div><!--End disp_6-->
								</div><!--End level_2_3-->
								<div id="lvl_1_4" class="lvl_2">
										<div id="disp_7" class="display_lvl2">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_7-->
								</div><!--End level_2_4-->
							</div><!--End level_2-->
							<div id="level_3" class="tree_level">
								<div id="lvl_3_1" class="lvl_3">
									<div id="disp_8" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_8-->
								</div><!--End level_3_1-->
								<div id="lvl_3_2" class="lvl_3">
									<div id="disp_9" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_9-->
								</div><!--End level_3_2-->
								<div id="lvl_3_3" class="lvl_3">
									<div id="disp_10" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_10-->
								</div><!--End level_3_3-->
								<div id="lvl_3_4" class="lvl_3">
									<div id="disp_11" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_11-->
								</div><!--End level_3_4-->
								<div id="lvl_3_5" class="lvl_3">
									<div id="disp_12" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_12-->
								</div><!--End level_3_5-->
								<div id="lvl_3_6" class="lvl_3">
									<div id="disp_13" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_13-->
								</div><!--End level_3_6-->
								<div id="lvl_3_7" class="lvl_3">
									<div id="disp_14" class="display_lvl3">
		                           		<div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_14-->
								</div><!--End level_3_7-->
								<div id="lvl_3_8" class="lvl_3">
									<div id="disp_15" class="display_lvl3">
			                            <div class="disp_info">
											<span >Free</span> 
			                            </div>
									</div><!--End disp_15-->
								</div><!--End level_3_8-->
							</div><!--End level_3-->
						</div><!--End tree view-->
					</div><!-- /END/ .frame-content -->
				</div><!-- /END/ .frame-box -->		
			</div> <!-- /End/ .span12-->
		</div><!-- /End/ .row-fluid -->
	</div> <!-- /End/ .container -->
</div><!-- /End/ .content -->

<div class="footer">
	<div class="container">
		This is the footer
	</div>
</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/select2.min.js"></script>
<script type='text/javascript' src='../lib/jsPlugins/jquery.jsPlumb-1.3.14-all-min.js'></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/account/uniform.init.js"></script>
<script type="text/javascript" src="../js/account/jsPlumb-init.js"></script>
</body>
</html>

