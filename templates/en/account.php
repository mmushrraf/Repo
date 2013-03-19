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
			<h1>Account | <small> <?php echo $_SESSION['user_name'];?></small></h1>
		</div>
		<div id="follow-up">
			<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
			<a href="../account/account.php" class="current">Account</a>
		</div>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.
		</div>
<!-- ################################################################################################ -->	
		<div class="container-fluid">
			<div class="row-fluid">
			  	<div class="span12">
			  		<!-- level-1 -->
			  		<div class="accordion lvl_list" id="uni-collpase">
				        <div class="accordion-group frame-box">
				            <div class="accordion-heading">
				                <div class="frame-title">
				                    <a data-parent="#uni-collapse" href="#upgrade" data-toggle="collapse">
				                        <span class="icon"><i class="icon-hand-right"></i></span><h5>Account Upgrade</h5>
				                    </a>
				                </div><!-- /End/ .frame-title-->
				            </div><!-- /End/ .accordion-heading-->
				            <div class="collapse accordion-body" id="upgrade">
				                <div class="frame-content">
								<!-- /END/ Start fees -->
								    <div id="fees">
							            <div class="head">
							                <h3>Upgrade your account with Edaqua</h3>
							                <h6>We currently are offering the following distributor packages:</h6>
							            </div>

							            <div class="row-fluid fees-holder">
							                <!-- Plan Box -->
							                <div class="span4">
							                    <div class="plan">
							                        <div class="wrapper">
							                            <h3>Basic</h3>
							                            <div class="price">
							                                <span class="dollar">€</span> 
							                                <span class="qty">5</span> 
							                                <span class="month">vat incl.</span>
							                            </div>
							                            <div class="features">
							                                <p>
																The perfect start point to begin your sales career.
							                                </p>
							                                <p>
																With this plan you will receive commisions in accourdance to
																to your monthly sales.
							                                </p>
							                                <p>
																
							                                </p>
							                            </div>
							                            <a class="order" href="#">UPGRADE NOW</a>
							                        </div>
							                    </div>
							                </div>
							                <!-- Plan Box -->
							                <div class="span4 pro">
							                    <div class="plan">
							                        <div class="wrapper">
							                            <img class="ribbon" src="../img/price-band.png" alt="Most Popular">
							                            <h3>Profesional</h3>
							                            <div class="price">
							                                <span class="dollar">€</span> 
							                                <span class="qty">362</span> 
							                                <span class="month"> vat incl.</span>
							                            </div>
							                            <div class="features">
							                                <p>
																Get the maximun from your online marketing skills.
							                                </p>
							                                <p>
																A package for profesinals xxxxxxxxxxxxxxxxx
							                                </p>
							                                <p>
																xxxx xxxx xxxxxx xxxxxx xxxxxxxx xxxxx
							                                </p>
							                                <p>
																xxxxxx xxxxxx xxxx xxxx
							                                </p>
							                            </div>
							                            <a class="order" href="#">UPGRADE NOW</a>
							                        </div>
							                    </div>
							                </div>
							                <!-- Plan Box -->
							                <div class="span4 standar">
							                    <div class="plan">
							                        <div class="wrapper">
							                            <h3>Personal</h3>
							                            <div class="price">
							                                <span class="dollar">€</span> 
							                                <span class="qty">121</span> 
							                                <span class="month">vat incl.</span>
							                            </div>
							                            <div class="features">
							                                <p>xxxxx xxxxx xxxxxx xxxxxxxxxx xxxxxxxxxx xxxxx
																
							                                </p>
							                                <p>xxxxx xxxxx xxxxxx xxxxxxxxxx xxxxxxxxxx xxxxx

							                                </p>
							                                <p>xxxxx xxxxx xxxxxx xxxxxxxxxx xxxxxxxxxx xxxxx

							                                </p>
							                            </div>
							                            <a class="order" href="#">UPGRADE NOW</a>
							                        </div>
							                    </div>
							                </div>
							            </div>
						            </div>
      							</div>
				            </div>	
			            </div>	
					</div>
	            </div>	
	        </div>	


			<div class="row-fluid">
				<!-- Start FIRST COLUMN -->
				<div class="span6">	
					<div class="frame-box">
						<div class="frame-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Account Options</h5>
							<div class="buttons"><button class="btn inline btn-mini popdown">Help</button></div>
						</div>
						<div class="frame-content nopadding">
							<form action="#" method="post" class="form-horizontal">
								<table class="table table-condensed table-bordered">
								<tbody>
								<tr>
									<th>Preferred Language:</th>
									<td><label><input type="radio" name="newsletter" /> Spanish</label></td>
									<td><label><input type="radio" name="newsletter" checked="checked" /> English</label></td>
								</tr>
								<tr>
									<th>Allow my email to be display to my upliner:</th>
									<td><label><input type="radio" name="email_up" /> On</label></td>
									<td><label><input type="radio" name="email_up" checked="checked" /> Off</label></td>
								</tr>
								<tr>
									<th>Allow my email to be display to my team:</th>
									<td><label><input type="radio" name="email_down" /> On</label></td>
									<td><label><input type="radio" name="email_down" checked="checked" /> Off</label></td>
								</tr>
								<tr>
									<th>Receive Newsletter fron Edaqua:</th>
									<td><label><input type="radio" name="newsletter" /> On</label></td>
									<td><label><input type="radio" name="newsletter" checked="checked" /> Off</label></td>
								</tr>
								<tr>
									<th>Auto Subscription Renewal:</th>
									<td><label><input type="radio" name="auto_subs" checked="checked"/> On</label></td>
									<td><label><input type="radio" name="auto_subs"/> Off</label></td>
								</tr>
								<tr>
									<th>Subscription Product</th>
									<td colspan="2"><select name="subs-product" style="width:200px;" id="subs-product">
									<option value="1001">Product-1</option>
									<option value="1002">Product-2</option>
									<option value="1003">Product-3</option>
									<option value="1004">Product-4</option>
									<option value="1005">Product-5</option>
									<option value="1006">Product-6</option>
									<option value="1007">Product-7</option>
									<option value="1008">Product-8</option>
									<option value="1009">Product-9</option>
									<option value="1010">Product-10</option>
									</select></td>
								</tr>
								<tr>
			    					<!-- Button to trigger account-options -->	
									<th colspan="3">							
										<a href="#account-options" role="button" class="btn" data-toggle="modal">Submit</a>		
									</th>
								</tr>           	                
								</tbody>
			    				</table>
								<!-- Modal account-options -->
								<div id="account-options" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-1" aria-hidden="true">
								  <div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								    <h3 id="modal-label-1">Account Options</h3>
								  </div>
								  <div class="modal-body">
								    <p>Are you sure you want to save the changes?</p>
								  </div>
								  <div class="modal-footer">
								    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

								    <button class="btn btn-primary">Save changes</button>
								  </div>
								</div>
								<!-- /END/ #account-options -->
							</form>
						</div>
					</div>
					<div class="frame-box">
						<div class="frame-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Delivery Options</h5>
						</div>
						<div class="frame-content nopadding">
							<form id="donation">
								<table class="table table-condensed table-bordered">
									<tbody>
									<tr>
										<th>Donate:</th>
										<td><label><input type="radio" name="delivery" checked="checked" /></label></td>
									</tr>
									<tr>
										<th>Send to my Delivery Address:</th>
										<td><label><input type="radio" name="delivery" /></label></td>
									</tr>
									<tr>
										<!-- Button to trigger modal-delivery -->
										<th colspan="2"><a href="#modal-delivery" role="button" class="btn" data-toggle="modal">Activate</a></th>
									</tr>     	                
									</tbody>
				    			</table>
								<!-- Modal Delivery -->
								<div id="modal-delivery" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
								  <div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								    <h3 id="modal-label-2">Delivery Options</h3>
								  </div>
								  <div class="modal-body">
								    <p>Are you sure you want to save the changes?</p>
								  </div>
								  <div class="modal-footer">
								    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

								    <button class="btn btn-primary">Save changes</button>
								  </div>
								</div>
								<!-- /END/ #modal-delivery -->
			    			</form>
						</div>
					</div>
				</div>	

				<!-- Start SECOND COLUMN -->
				<div class="span6">	
					<div class="frame-box">
						<div class="frame-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Account Information</h5>
						</div>
						<div class="frame-content nopadding">
							<table class="table table-condensed table-bordered">
								<tbody>
								<tr>
									<th>Account ID:</th>
									<td>{account_id}</td>
								</tr>
								<tr>
									<th>Account Username:</th>
									<td>{screename}</td>
								</tr>
								<tr>
									<th>Account Type:</th>
									<td>{account_type}</td>
								</tr>
								<tr>
									<th>Subscription Renewal:</th>
									<td>{due_date}</td>
								</tr>         	                
								</tbody>
			    			</table>
						</div>
					</div>

					<div class="frame-box">
						<div class="frame-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Upliner Information</h5>
						</div>
						<div class="frame-content nopadding">
							<table class="table table-condensed table-bordered">
								<tbody>
								<tr>
									<th>Upliner ID:</th>
									<td>{parent_id}</td>
								</tr>
								<tr>
									<th>Upliner Full Name:</th>
									<td>{name_surn1_surn2}</td>
								</tr>
								<tr>
									<th>Upliner Email:</th>
									<td>{Upliner email}</td>
								</tr>     	                
								</tbody>
			    			</table>
						</div>
					</div>
					<!-- start change password -->
					<div class="frame-box"> 
						<div class="frame-title">
							<span class="icon">
								<i class="icon-align-justify"></i>									
							</span>
							<h5>Change Password</h5>
						</div>
						<div class="frame-content nopadding">
							<form id="change-pass">
							<table class="table table-condensed table-bordered">
								<tbody>
								<tr>
									<th>Password:</th>
									<td><input type="password" minlength="6" name="password" id="password" value=""  /></td>
								</tr>
								<tr>
									<th>Confirmation:</th>
									<td><input type="password" name="re_password" id="re_password" value=""/></td>
								</tr>
								<tr>
									<th>Strenght:</th>
									<td><div id="pwstrengthbox"></div> </td>
								</tr>
								<tr>
			    				<!-- Button to trigger modal-password -->	
									<th colspan="2">							
										<a href="#modal-password" role="button" class="btn" data-toggle="modal">Submit</a>		
									</th>
								</tr>       	                
								</tbody>
			    			</table>				  
								<!-- Modal Password -->
								<div id="modal-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-3" aria-hidden="true">
								  <div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								    <h3 id="modal-label-3">Change Password</h3>
								  </div>
								  <div class="modal-body">
								    <p>Are you sure you want to save the changes?</p>
								  </div>
								  <div class="modal-footer">
								    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

								    <button class="btn btn-primary">Save changes</button>
								  </div>
								</div>
								<!-- /END/ #modal-password -->
		    				</form>
						</div>
					</div>
				</div> 
			</div><!-- /END/ .row-fluid -->
		</div>
	</div>

	<div class="footer">
		<div class="container">
			This is the footer
		</div>
	</div>
<script type="text/javascript" src="../lib/jsPlugins/jquery-ui-1.9.0.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/select2.min.js"></script>
<script type='text/javascript' src='../lib/jsPlugins/jquery.validate.min.js'></script>
<script type="text/javascript" src="../js/account/dataTable.init.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/account/uniform.init.js"></script>
<script type="text/javascript" src="../js/common/pwsmeter-en.js"></script>
<script type='text/javascript' src='../js/common/validations.js'></script>
</body>
</html>


