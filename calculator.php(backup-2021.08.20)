<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php include("include/css.php");?> 

    <title>allabout architecture</title>
  </head>
  <body>
     
    <?php include("include/header.php");
	
	$strSql = "
		select  * 
		  from  tblzone
		 where  zone_status = 'A'
	  order by  zone_name
	";
	$dtZone = getDatatable($strSql);
	
	$strSql = "
		select state_id, zone_id, state_name, state_desc, 
		case
		  when trim(ifnull(state_image,'')) = '' then 'default_state_image.png'
		  else trim(ifnull(state_image,''))
		end state_image
		from tblstate
		where state_status = 'A'
	";
	$dtState = getDatatable($strSql);
	
	$strSql = "
		select  id, ifnull(cat_parent_id,0) cat_parent_id, cat_name,
				case
				  when trim(ifnull(cat_image,'')) = '' then 'default_cat_image.png'
				  else trim(ifnull(cat_image,''))
				end cat_image
		  from  tblcategories
		 where  cat_status = 'A'
		   and  cat_lvl = 1
	  order by  cat_order
	";
	$dtCat1 = getDatatable($strSql);
	
	$strSql = "
		select  id, ifnull(cat_parent_id,0) cat_parent_id, cat_name,
				case
				  when trim(ifnull(cat_image,'')) = '' then 'default_cat_image.png'
				  else trim(ifnull(cat_image,''))
				end cat_image
		  from  tblcategories
		 where  cat_status = 'A'
		   and  cat_lvl = 2
	  order by  cat_order
	";
	$dtCat2 = getDatatable($strSql);
	
	$strSql = "
		select  id, ifnull(cat_parent_id,0) cat_parent_id, cat_name,
				case
				  when trim(ifnull(cat_image,'')) = '' then 'default_cat_image.png'
				  else trim(ifnull(cat_image,''))
				end cat_image, cat_desc
		  from  tblcategories
		 where  cat_status = 'A'
		   and  cat_lvl = 3
	  order by  cat_order
	";
	$dtCat3 = getDatatable($strSql);
	
	$strSql = "
			select  pr.product_id, pr.product_name, pr.product_picture, pr.product_price, cat.id,
					pr.product_length, pr.product_width, pr.product_depth
			  from  tblproduct pr
		inner join  tblproduct_category pcat on pr.product_id = pcat.product_id
			   and  pr.product_status = 'A'
		inner join  tblcategories cat on pcat.cat_id = cat.id
			   and  cat.cat_status = 'A'
		  order by  pr.product_name
	";
	$dtProduct = getDatatable($strSql);
	
	
	?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/calculator-banner.png" alt="inside-page">
    </section>


    <section class="calculator-main-block">
        <div class="container">
          <!--
            <div class="main-titel-block">
                <h2><span>Calculator</span></h2>
            </div>
            --->

            <div class="calculator-block">
              
              <!-----calculator---->

              <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="calculator-box">
                        <div class="card rounded-0 b-0">
                            <div class="card-header">
                                <div class="row d-flex justify-content-between">
                                    <div class="cal-header-left-block">
                                        <h5 class="title">Tell Us Little More About Your Requirement?</h5>
                                        <h6 class="sub-title">Simply Follow Through</h6>
                                    </div>
                                    <div class="cal-header-right-block text-md-center">
                                        <h5 class="title">Call us</h5>
                                        <h5 class="mobile-nimber"><span class="fa fa-phone pr-3"></span>123 456 7891</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                                <div class="count text-center">
                                    <p class="mb-sm-0 pb-sm-0">
                                        <strong><span id="cnt">25</span>%</strong> 
                                        <span>Completed</span>
                                    </p>
                                </div>
                            </div>

                            <!------step1----->
                            <div class="card-body show pt-0 full-image-banner select-zone-block" id="divContainerZone" >
                                <h4 class="heading mb-4 pb-1">Select Zone</h4>

                                <div class="radio-group radio-group-zone row justify-content-center px-3">
									<?php
									for($iRow=0;$iRow<=count($dtZone)-1;$iRow++)
									{
										echo '
										<div class="card-block radio zone_name" data-zone_id="'.$dtZone[$iRow]['zone_id'].'" data-zone_name="'.$dtZone[$iRow]['zone_name'].'" >
											<div class="radio-top-round-icon">
												<div class="fa fa-circle"></div>
											</div>
											<div class="radio-image-text-block">
												<div class="pic"> <img src="admin/zone_image/'.$dtZone[$iRow]['zone_image'].'" class="pic-0"> </div>
												<h5 class="mb-4">'.$dtZone[$iRow]['zone_name'].'</h5>
												<p>'.$dtZone[$iRow]['zone_description'].'</p>
											</div>
										</div>
										';
									}
									?>
									<!--
                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">EASTERN ZONE</h5>
                                        </div>
                                    </div>
                                    -->
									
									
                                </div>
                                <div class="row justify-content-center"> <button class="btn btn-blue next mx-2 btnNext" data-action="zone" id="next1">Next<span class="fa fa-long-arrow-right"></span></button> </div>
                            </div>
                            <!------step1--end--->


                            <!------step2----->
                            <div class="card-body pt-0 full-image-banner select-your-state" id="divContainerState" >
                                <h4 class="heading mb-4 pb-1" id="lblSelectedZone"></h4>

                                  <div class="radio-group-state row justify-content-center px-3" id="divStateList">
								  
									<!--
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-circle"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">West Bengal West Bengal West Bengal West Bengal West Bengal West Bengal</h5>
                                        </div>
                                    </div>
									-->
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2 btnPrevious" data-action="state" ><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2 btnNext" data-action="state" id="next2" >Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step2--end--->


                            <!------step3----->
                            <div class="card-body pt-0 full-image-banner room-type-block" id="divContainerCat1" >
                                <h4 class="heading mb-4 pb-1">Select Type</h4>

                                  <div class="radio-group-cat1 row justify-content-center px-3" id="divCat1List" >

								  <!--
                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Bed Room</h5>
                                        </div>
                                    </div>
									
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-2.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Living Room</h5>
                                        </div>
                                    </div>
									-->

                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2 btnPrevious" data-action="cat1" ><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2 btnNext" data-action="cat1" id="next2" >Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step3--end--->


                            <!------step4----->
                            <div class="card-body pt-0 full-image-banner parameters-block" id="divContainerCat2">
                                <h4 class="heading mb-4 pb-1">Select Location</h4>

                                  <div class="radio-group-cat2 row justify-content-center px-3" id="divCat2List">

									<!--
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring</h5>
                                        </div>
                                    </div>
									-->
                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2 btnPrevious" data-action="cat2" ><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2 btnNext" data-action="cat2" id="next2" >Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step4--end--->


                            <!------step5----->
                            <div class="card-body pt-0 full-image-banner material-block" id="divContainerCat3">
                                <h4 class="heading mb-4 pb-1">Sectct Material</h4>

                                  <div class="radio-group-cat3 row justify-content-center px-3" id="divCat3List">
									<!--
                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>
									-->
                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2 btnPrevious" data-action="cat3" ><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2 btnNext" data-action="cat3" id="next2" >Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step5--end--->


                            <!------step6----->
                            <div class="card-body pt-0" id="divContainerProduct" >
                                <h4 class="heading mb-4 pb-1">Select Product</h4> 
                                <!--<label class="text-danger mb-3">* Required</label>-->

                                <div class="calculator-image-form-box">
                                    <div class="calculator-left-image-box">
                                        <img id="imgProduct" src="admin/uploads/product/default_cal_product_image.png" alt="">
                                    </div>
                                    <div class="calculator-form-details-box">
										<div class="header-text"> Select Product </div>
										<div class="form-block">
											<div class="calculator-form-box product-name-select">
                                                <label>Product Name:</label>
                                                <select class="form-control" id="cboProduct" onChange="loadProduct()" >
													<option value="0" >Select Product</option>
                                                </select>
                                            </div>
										</div>
                                        <div class="header-text"> Material area </div>
                                        <div class="form-block">

                                            <div class="calculator-form-box">
                                                <label>Length:</label>
                                                <input id="product_length" name="product_length" readonly class="form-control" type="text" placeholder="Enter value">
												
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
												
                                            </div>

                                            <div class="calculator-form-box">
                                                <label>Width:</label>
                                                <input id="product_width" name="product_width" readonly class="form-control" type="text" placeholder="Enter value">
												
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
												
                                            </div>

                                            <div class="calculator-form-box">
                                                <label>Depth:</label>
                                                <input id="product_depth" name="product_depth" readonly class="form-control" type="text" placeholder="Enter value">
												
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
												
                                            </div>

                                            <div class="calculator-form-box">
                                                <label>Price per unit of mass:</label>
                                                <input id="product_price" name="product_price" class="form-control" type="text" placeholder="0" readonly>
                                                
                                            </div>


                                        </div>

                                    </div>
                                </div>


                                <h4 class="heading mb-4 pb-1">Room Details</h4> 
                                <!--<label class="text-danger mb-3">* Required</label>-->

                                <div class="calculator-image-form-box">
                                    <div class="calculator-left-image-box">
                                        <img src="images/calculator/room-details-image.png" alt="">
                                    </div>
                                    <div class="calculator-form-details-box">
                                        <div class="header-text"> Room With, Depth & Width </div>
                                        <div class="form-block">

                                            <div class="calculator-form-box">
                                                <label>Length:</label>
                                                <input id="usr_product_length" name="usr_product_length" class="form-control" type="text" placeholder="Enter value">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
                                            </div>
											
											<div class="calculator-form-box">
                                                <label>Width:</label>
                                                <input id="usr_product_width" name="usr_product_width" class="form-control" type="text" placeholder="Enter value">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
                                            </div>

                                            <div class="calculator-form-box">
                                                <label>Depth:</label>
                                                <input id="usr_product_depth" name="usr_product_depth" class="form-control" type="text" placeholder="Enter value">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option >ft</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                                
                                <div class="row justify-content-center"> 
								<button class="btn btn-secondary prev mx-2 btnPrevious" data-action="product" ><span class="fa fa-long-arrow-left"></span>Back</button> 
								<button class="btn btn-blue next mx-2 btnNext" data-action="product" id="next3" onclick="validate2(0)">Next<span class="fa fa-long-arrow-right"></span></button> 
								</div>
                            </div>
                            <!------step6----->

                            <!------step7--last--->
                            <div class="card-body pt-0 calculate-result-block" id="divContainerCalculation" >
                                <h4 class="heading mb-4 pb-1">Your Calculate Result</h4>
                                <div class="calculate-result-box">
                                    <div class="row justify-content-start px-3">
                                        <div class="col-sm-6">
                                            <div class="calculate-result-image-box">
                                                <img src="images/calculator/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">                                            
                                            <div class="result-details">
                                                <p>Unit Price : <b id="spanUnitPrice"></b> </p>

                                                <p>Square feet calculator: <b id="spanSquareFeetCalculator"></b></p>

                                                <p>Quantity Required : <b id="spanQuantityRequired"></b> </p>
                                            </div>                                            
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="total-coust"  >Total Cost: <b id="spanTotalCost"></b></div>
                                        </div>
                                    </div> 
                                </div>
								<div class="row justify-content-start px-3" id="state_desc" >
								</div>
                                <div class="row justify-content-center"> <img src="images/calculator/result.gif" class="check"> </div>
                            </div>
                            <!------step7----->


                        </div>
                    </div>
                </div>
            </div>

              <!-----calculator--end--->

            </div>







        </div>
    </section>
	
	
	<!-- Modal -->
	<div id="modDesc" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-body">
			<h4 id="spnModHeader" ></h4>
			<p id="spnModDesc" ></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>



      
    <?php include("include/footer.php");?> 

	<?php include("include/js.php");?>


    <!----menu--->
    <script>
        $(window).scroll(function() {    
			var scroll = $(window).scrollTop();

			if (scroll >= 150) {
				$(".navwrap").addClass("darkHeader");
			} else {
				$(".navwrap").removeClass("darkHeader");
			}
		});
		
		jQuery(document).on('click','.open_desc',function(){
		
			jQuery('#spnModHeader').html(jQuery(this).data('mod_header'));
			jQuery('#spnModDesc').html(jQuery(this).data('mod_desc'));
			jQuery('#modDesc').modal('show');
			
		});
		
    </script>

    <!----menu---end-->


    <!------calcluter---->

    <script type="text/javascript">
	
		var arr_state = [ 
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtState)-1;$iRow++)
		{
			echo $strComma.'{"state_id":"'.$dtState[$iRow]['state_id'].'","zone_id":"'.$dtState[$iRow]['zone_id'].'","state_name":"'.$dtState[$iRow]['state_name'].'","state_image":"'.$dtState[$iRow]['state_image'].'","state_desc":"'.$dtState[$iRow]['state_desc'].'"}';
			$strComma = ',';
		}
		?>
		];
		
		var arr_cat1 = [ 
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtCat1)-1;$iRow++)
		{
			echo $strComma.'{"id":"'.$dtCat1[$iRow]['id'].'","cat_parent_id":"'.$dtCat1[$iRow]['cat_parent_id'].'","cat_name":"'.$dtCat1[$iRow]['cat_name'].'","cat_image":"'.$dtCat1[$iRow]['cat_image'].'"}';
			$strComma = ',';
		}
		?>
		];
		
		var arr_cat2 = [ 
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtCat2)-1;$iRow++)
		{
			echo $strComma.'{"id":"'.$dtCat2[$iRow]['id'].'","cat_parent_id":"'.$dtCat2[$iRow]['cat_parent_id'].'","cat_name":"'.$dtCat2[$iRow]['cat_name'].'","cat_image":"'.$dtCat2[$iRow]['cat_image'].'"}';
			$strComma = ',';
		}
		?>
		];
		
		var arr_cat3 = [ 
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtCat3)-1;$iRow++)
		{
			echo $strComma.'{"id":"'.$dtCat3[$iRow]['id'].'","cat_parent_id":"'.$dtCat3[$iRow]['cat_parent_id'].'","cat_name":"'.$dtCat3[$iRow]['cat_name'].'","cat_image":"'.$dtCat3[$iRow]['cat_image'].'","cat_desc":"'.$dtCat3[$iRow]['cat_desc'].'"}';
			$strComma = ',';
		}
		?>
		];
		
		var arr_product = [ 
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtProduct)-1;$iRow++)
		{
			echo $strComma.'{"product_id":"'.$dtProduct[$iRow]['product_id'].'","cat_id":"'.$dtProduct[$iRow]['id'].'","product_name":"'.$dtProduct[$iRow]['product_name'].'","product_picture":"'.$dtProduct[$iRow]['product_picture'].'","product_price":"'.$dtProduct[$iRow]['product_price'].'","product_length":"'.$dtProduct[$iRow]['product_length'].'","product_width":"'.$dtProduct[$iRow]['product_width'].'","product_depth":"'.$dtProduct[$iRow]['product_depth'].'"}';
			$strComma = ',';
		}
		?>
		];
      
		var zone_id = 0;
		var zone_name = '';
		var state_id = 0;
		var cat_id1 = 0;
		var cat_id2 = 0;
		var cat_id3 = 0;
		var strDesign = '';
		
		var product_id = 0;
		var product_price = 0;
		var product_length = 0;
		var product_width = 0;
		var product_depth = 0;
		var usr_product_length = 0;
		var usr_product_width = 0;
		var usr_product_depth = 0;
		var iTotalNoProduct = 0;
		
		/*
		jQuery('.radio-group .radio').click(function(){
			$('.selected .fa').removeClass('fa-check');
			$('.selected .fa').addClass('fa-circle');
			$('.radio').removeClass('selected');
			$(this).addClass('selected');
			$('.selected .fa').removeClass('fa-circle');
			$('.selected .fa').addClass('fa-check');
		});
		*/
		
		jQuery(document).on('click','.radio-group-zone .radio',function(){
			$('.radio-group-zone .selected .fa').removeClass('fa-check');
			$('.radio-group-zone .selected .fa').addClass('fa-circle');
			$('.radio-group-zone .radio').removeClass('selected');
			$(this).addClass('selected');
			$('.radio-group-zone .selected .fa').removeClass('fa-circle');
			$('.radio-group-zone .selected .fa').addClass('fa-check');
		});
		
		jQuery(document).on('click','.radio-group-state .radio',function(){
			$('.radio-group-state .selected .fa').removeClass('fa-check');
			$('.radio-group-state .selected .fa').addClass('fa-circle');
			$('.radio-group-state .radio').removeClass('selected');
			$(this).addClass('selected');
			$('.radio-group-state .selected .fa').removeClass('fa-circle');
			$('.radio-group-state .selected .fa').addClass('fa-check');
		});
		
		jQuery(document).on('click','.radio-group-cat1 .radio',function(){
			$('.radio-group-cat1 .selected .fa').removeClass('fa-check');
			$('.radio-group-cat1 .selected .fa').addClass('fa-circle');
			$('.radio-group-cat1 .radio').removeClass('selected');
			$(this).addClass('selected');
			$('.radio-group-cat1 .selected .fa').removeClass('fa-circle');
			$('.radio-group-cat1 .selected .fa').addClass('fa-check');
		});
		
		jQuery(document).on('click','.radio-group-cat2 .radio',function(){
			$('.radio-group-cat2 .selected .fa').removeClass('fa-check');
			$('.radio-group-cat2 .selected .fa').addClass('fa-circle');
			$('.radio-group-cat2 .radio').removeClass('selected');
			$(this).addClass('selected');
			$('.radio-group-cat2 .selected .fa').removeClass('fa-circle');
			$('.radio-group-cat2 .selected .fa').addClass('fa-check');
		});
		
		jQuery(document).on('click','.radio-group-cat3 .radio',function(){
			$('.radio-group-cat3 .selected .fa').removeClass('fa-check');
			$('.radio-group-cat3 .selected .fa').addClass('fa-circle');
			$('.radio-group-cat3 .radio').removeClass('selected');
			$(this).addClass('selected');
			$('.radio-group-cat3 .selected .fa').removeClass('fa-circle');
			$('.radio-group-cat3 .selected .fa').addClass('fa-check');
		});
		
		jQuery(document).on('click','.zone_name',function(){
			zone_id = jQuery(this).data('zone_id');
			zone_name = jQuery(this).data('zone_name');
		});
		
		jQuery(document).on('click','.state_name',function(){
			state_id = jQuery(this).data('state_id');
		});
		
		jQuery(document).on('click','.cat_name1',function(){
			cat_id1 = jQuery(this).data('cat_id1');
		});
		
		jQuery(document).on('click','.cat_name2',function(){
			cat_id2 = jQuery(this).data('cat_id2');
		});
		
		jQuery(document).on('click','.cat_name3',function(){
			cat_id3 = jQuery(this).data('cat_id3');
			console.log(cat_id3);
		});
		
		jQuery(document).on('click','.btnNext',function(){
			
			if(jQuery(this).data('action')=='zone')
			{
				if(zone_id > 0)
				{
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerState').addClass('show');
					
					jQuery('#lblSelectedZone').html(zone_name+': Select Your State');
					
					strDesign = '';
					for(iRow=0;iRow<=arr_state.length-1;iRow++)
					{
						if(arr_state[iRow]['zone_id']==zone_id)
						{
							strDesign += '<div class="card-block radio state_name" data-state_id="'+arr_state[iRow]['state_id']+'" >';
							strDesign += '	<div class="radio-top-round-icon">';
							strDesign += '		<div class="fa fa-circle"></div>';
							strDesign += '	</div>';
							strDesign += '	<div class="radio-image-text-block">';
							strDesign += '		<div class="pic"> <img src="admin/state_image/'+arr_state[iRow]['state_image']+'" class="pic-0"> </div>';
							strDesign += '		<h5 class="mb-4">'+arr_state[iRow]['state_name']+'</h5>';
							
							var state_desc = arr_state[iRow]['state_desc'];
							strDesign += '		<p class="mb-4" >'+state_desc.substring(0, 100)+'<a class="open_desc" data-mod_header="'+arr_state[iRow]['state_name']+'" data-mod_desc="'+arr_state[iRow]['state_desc']+'" href="javascript:void(0);" >[...]</a></p>';
							
							strDesign += '	</div>';
							strDesign += '</div>';
						}
						
					}
					state_id = 0;
					jQuery('#divStateList').html(strDesign);
				}
				else
				{
					alert('Please Select Zone');
				}
			}
			else if(jQuery(this).data('action')=='state')
			{
				if(state_id > 0)
				{
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerCat1').addClass('show');
					
					strDesign = '';
					for(iRow=0;iRow<=arr_cat1.length-1;iRow++)
					{
						strDesign += '<div class="card-block radio cat_name1" data-cat_id1="'+arr_cat1[iRow]['id']+'" >';
						strDesign += '	<div class="radio-top-round-icon">';
						strDesign += '		<div class="fa fa-circle"></div>';
						strDesign += '	</div>';
						strDesign += '	<div class="radio-image-text-block">';
						strDesign += '		<div class="pic"> <img src="admin/catimage/'+arr_cat1[iRow]['cat_image']+'" class="pic-0"> </div>';
						strDesign += '		<h5 class="mb-4">'+arr_cat1[iRow]['cat_name']+'</h5>';
						strDesign += '	</div>';
						strDesign += '</div>';
					}
					
					jQuery('#divCat1List').html(strDesign);
				}
				else
				{
					alert('Please Select State');
				}
			}
			else if(jQuery(this).data('action')=='cat1')
			{
				if(cat_id1 > 0)
				{
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerCat2').addClass('show');
					
					strDesign = '';
					for(iRow=0;iRow<=arr_cat2.length-1;iRow++)
					{
						if(arr_cat2[iRow]['cat_parent_id']==cat_id1)
						{
							strDesign += '<div class="card-block radio cat_name2" data-cat_id2="'+arr_cat2[iRow]['id']+'" >';
							strDesign += '	<div class="radio-top-round-icon">';
							strDesign += '		<div class="fa fa-circle"></div>';
							strDesign += '	</div>';
							strDesign += '	<div class="radio-image-text-block">';
							strDesign += '		<div class="pic"> <img src="admin/catimage/'+arr_cat2[iRow]['cat_image']+'" class="pic-0"> </div>';
							strDesign += '		<h5 class="mb-4">'+arr_cat2[iRow]['cat_name']+'</h5>';
							strDesign += '	</div>';
							strDesign += '</div>';
						}
					}
					
					jQuery('#divCat2List').html(strDesign);
				}
				else
				{
					alert('Please Select Type');
				}
			}
			else if(jQuery(this).data('action')=='cat2')
			{
				if(cat_id2 > 0)
				{
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerCat3').addClass('show');
					
					strDesign = '';
					for(iRow=0;iRow<=arr_cat3.length-1;iRow++)
					{
						if(arr_cat3[iRow]['cat_parent_id']==cat_id2)
						{
							strDesign += '<div class="card-block radio cat_name3" data-cat_id3="'+arr_cat3[iRow]['id']+'" >';
							strDesign += '	<div class="radio-top-round-icon">';
							strDesign += '		<div class="fa fa-circle"></div>';
							strDesign += '	</div>';
							strDesign += '	<div class="radio-image-text-block">';
							strDesign += '		<div class="pic"> <img src="admin/catimage/'+arr_cat3[iRow]['cat_image']+'" class="pic-0"> </div>';
							strDesign += '		<h5 class="mb-4">'+arr_cat3[iRow]['cat_name']+'</h5>';
							
							var cat_desc = arr_cat3[iRow]['cat_desc'];
							strDesign += '		<p class="mb-4" >'+cat_desc.substring(0, 100)+'<a class="open_desc" data-mod_header="'+arr_cat3[iRow]['cat_name']+'" data-mod_desc="'+arr_cat3[iRow]['cat_desc']+'" href="javascript:void(0);" >[...]</a></p>';
							
							strDesign += '	</div>';
							strDesign += '</div>';
						}
					}
					
					jQuery('#divCat3List').html(strDesign);
				}
				else
				{
					alert('Please Select Location');
				}
			}
			else if(jQuery(this).data('action')=='cat3')
			{
				if(cat_id3 > 0)
				{
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerProduct').addClass('show');
					
					strDesign = '<option value="0" >Select Product</option>';
					for(iRow=0;iRow<=arr_product.length-1;iRow++)
					{
						if(arr_product[iRow]['cat_id']==cat_id3)
						{
							strDesign += '<option value="'+arr_product[iRow]['product_id']+'" >'+arr_product[iRow]['product_name']+'</option>';
						}
					}
					
					jQuery('#cboProduct').html(strDesign);
					
					
					if(cat_id2==5)
					{
						jQuery('#product_depth').val('0');
						jQuery('#product_depth').attr('readonly',true);
						jQuery('#usr_product_depth').val('0');
						jQuery('#usr_product_depth').attr('readonly',true);
					}
					
					
				}
				else
				{
					alert('Please Select Material');
				}
			}
			else if(jQuery(this).data('action')=='product')
			{
				if(product_id > 0)
				{
					iTotalNoProduct = 0;
					usr_product_length = jQuery('#usr_product_length').val();
					usr_product_width = jQuery('#usr_product_width').val();
					usr_product_depth = jQuery('#usr_product_depth').val();
					
					jQuery('#spanUnitPrice').html('');
					jQuery('#spanSquareFeetCalculator').html('');
					jQuery('#spanQuantityRequired').html('');
					jQuery('#spanTotalCost').html('');
					
					if(cat_id2==5)
					{
						console.log(usr_product_length);
						console.log(usr_product_width);
						console.log(product_length);
						console.log(product_width);
						
						iTotalNoProduct = Math.round((parseFloat(usr_product_length)*parseFloat(usr_product_width))/(parseFloat(product_length)*parseFloat(product_width)));
					}
				
					jQuery(this).parents('div.card-body').removeClass('show');
					jQuery('#divContainerCalculation').addClass('show');
					
					jQuery('#spanUnitPrice').html('Rs '+product_price);
					jQuery('#spanSquareFeetCalculator').html(Math.round(parseFloat(usr_product_length)*parseFloat(usr_product_width))+' sqft');
					jQuery('#spanQuantityRequired').html(iTotalNoProduct+' pc');
					jQuery('#spanTotalCost').html('Rs '+parseInt(iTotalNoProduct)*parseInt(product_price));
					
					/*
					for(iRow=0;iRow <= arr_state.length-1;iRow++)
					{
					
						if(arr_state[iRow]['state_id'] == state_id)
						{
							jQuery('#state_desc').html('<h1>'+arr_state[iRow]['state_name']+'</h1><p>'+arr_state[iRow]['state_desc']+'</p>');
						}
						
					}
					*/
					
					
					
				}
				else
				{
					alert('Please Select Product');
				}
			}
			
			// cat1
			
		});
		
		function loadProduct()
		{
			if(jQuery('#cboProduct').val()=='0')
			{
				jQuery('#imgProduct').attr('src','admin/uploads/product/default_cal_product_image.png');
				jQuery('#product_length').val('0');
				jQuery('#product_width').val('0');
				jQuery('#product_depth').val('0');
				jQuery('#product_price').val('0');
				
				product_id = 0;
				product_length = 0;
				product_width = 0;
				product_price = 0;
			}
			else
			{
				for(iRow=0;iRow<=arr_product.length-1;iRow++)
				{
					if(arr_product[iRow]['product_id']==jQuery('#cboProduct').val())
					{
						jQuery('#imgProduct').attr('src','admin/uploads/product/'+arr_product[iRow]['product_picture']);
						jQuery('#product_length').val(arr_product[iRow]['product_length']);
						jQuery('#product_width').val(arr_product[iRow]['product_width']);
						
						jQuery('#product_price').val(arr_product[iRow]['product_price']);
						
						product_id = jQuery('#cboProduct').val();
						product_length = arr_product[iRow]['product_length'];
						product_width = arr_product[iRow]['product_width'];
						product_price = arr_product[iRow]['product_price'];
						
						if(cat_id2==5)
						{
						
						}
						else
						{
							jQuery('#product_depth').val(arr_product[iRow]['product_depth']);
							product_depth = arr_product[iRow]['product_depth'];
						}
						
					}
				}
			}
		}
		
		jQuery(document).on('click','.btnPrevious',function(){
		
			if(jQuery(this).data('action')=='state')
			{
				jQuery(this).parents('div.card-body').removeClass('show');
				jQuery('#divContainerZone').addClass('show');
				
				//zone_id = 0;
				//zone_name = '';
		
			}
			else if(jQuery(this).data('action')=='cat1')
			{
				jQuery(this).parents('div.card-body').removeClass('show');
				jQuery('#divContainerState').addClass('show');
				
				//zone_id = 0;
				//zone_name = '';
		
			}
			else if(jQuery(this).data('action')=='cat2')
			{
				jQuery(this).parents('div.card-body').removeClass('show');
				jQuery('#divContainerCat1').addClass('show');
				
				//zone_id = 0;
				//zone_name = '';
		
			}
			else if(jQuery(this).data('action')=='cat3')
			{
				jQuery(this).parents('div.card-body').removeClass('show');
				jQuery('#divContainerCat2').addClass('show');
				
				//zone_id = 0;
				//zone_name = '';
		
			}
			else if(jQuery(this).data('action')=='product')
			{
				jQuery(this).parents('div.card-body').removeClass('show');
				jQuery('#divContainerCat3').addClass('show');
				
				//zone_id = 0;
				//zone_name = '';
		
			}
			
		})

    </script>
    
    <!-----calcluter--->
   
  </body>
</html>
