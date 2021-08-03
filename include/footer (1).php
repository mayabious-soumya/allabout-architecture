<footer class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="images/footer-logo.png" class="mb-4">
                    <p class="mb-4">Address - 98, D, N.S.C Bose Road, Kolkata</p>
                    <a href="#">91-9007159440</a>
                    <!--<a href="#" class="mb-4">1-800-310-1010</a>-->
                    <a href="#">admin@allaboutarchitecture.in</a>
                </div>
                <div class="col-sm-3">
                    <h2 class="mb-4">NAVIGATE</h2>
                    <ul class="nav1">
                        <li><a href="#">HOME</a></li>
                        <!--<li><a href="#">GRID SYSTEM</a></li>-->
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">PAGES</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2 class="mb-4">ABOUT US</h2>
                    <ul class="nav2">
                        <li><a href="#">COMPANY</a></li>
                        <li><a href="#">WHAT WE DO</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <!--<li><a href="#">HELP CENTER</a></li>-->
                        <li><a href="terms-service.php">TERMS OF SERVICE</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2 class="mb-4">RECENT POSTS</h2>
                    <a href="#" class="mb-4">New trends in web design<span>Jule 10</span></a>
                    <a href="#" class="mb-4">The sound of life<span>October 10</span></a>
                    <a href="#" class="mb-4">Time for minimalism<span>September 21</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="copywrite">
                        <h4>© Copyright 2019 Allabout Architecture.</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>        
      </footer>
	  
	<!-- Strat - Calculator modal -->

	<a href="" data-toggle="modal" data-target="#modCalculator" class="modCalculator-button">
        Calculator
    </a>



	<div id="modCalculator" class="modal fade calculate-popup" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
		  	<h2 class="titel">Calculate</h2>
		  	<p>please fill up your details</p>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		  <div class="modal-body">
			
			<!-- Start Modal Form -->
			<form>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Room Type</label>
							<select class="form-control" id="cboRoomType" name="cboRoomType" >
							  <option value="">Select Room Type</option>
							  <option value="Living Room">Living Room</option>
							  <option value="Bed Room">Bed Room</option>
							  <option value="Bedroom 2">Bedroom 2</option>
							</select>
						  </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtRoomLength">Length</label>
							<input type="text" class="form-control" id="txtRoomLength" name="txtRoomLength" placeholder="Please Enter Length">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtRoomBreadth">Breadth</label>
							<input type="text" class="form-control" id="txtRoomBreadth" name="txtRoomBreadth" placeholder="Please Enter Breadth">
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtRoomHeight">Height</label>
							<input type="text" class="form-control" id="txtRoomHeight" name="txtRoomHeight" placeholder="Please Enter Height">
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Room Type Parameters</label>
							<select class="form-control" id="cboRoomTypeParameters" name="cboRoomTypeParameters" onChange="loadMaterial()" >
							  <option value="">Select Parameters</option>
							  <option value="1">Flooring</option>
							  <option value="4">Wall</option>
							  <option value="5">Ceiling</option>
							  <option value="7">Doors</option>
							  <option value="8">Windows</option>
							</select>
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="cboMaterial">Material </label>
							<select class="form-control" id="cboMaterial" name="cboMaterial" >
								<option value="0">Select Material</option>
							</select>
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtMaterialLength">Material Length</label>
							<input type="text" class="form-control" id="txtMaterialLength" name="txtMaterialLength" placeholder="Please Enter Material Length">
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtMaterialBreadth">Material Breadth</label>
							<input type="text" class="form-control" id="txtMaterialBreadth" name="txtMaterialBreadth" placeholder="Please Enter Material Breadth">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtMaterialDepth">Material Depth</label>
							<input type="text" class="form-control" id="txtMaterialDepth" name="txtMaterialDepth" placeholder="Please Enter Material Depth">
						  </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtQuantityRequired">Quantity Required</label>
							<input type="text" class="form-control" id="txtQuantityRequired" name="txtQuantityRequired" placeholder="Quantity Required" readonly>
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtUnitPrice">Unit Price</label>
							<input type="text" class="form-control" id="txtUnitPrice" name="txtUnitPrice" placeholder="Unit Price" readonly >
						  </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="txtTotalCost">Total Cost</label>
							<input type="text" class="form-control" id="txtTotalCost" name="txtTotalCost" placeholder="Total Cost" readonly >
						 </div>
					</div>
				</div>

			  
			</form>
			<!-- End Modal Form -->
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-default calculate-button" onClick="calculator()" >Calculate</button>
		  </div>
		</div>

	  </div>
	</div>
<script>
	var txtSearch = '<?php echo $txtSearch;?>';
	var sh_cat_id = '<?php echo $sh_cat_id?>';
	var sh_zone_id = '<?php echo $sh_zone_id;?>';
</script>