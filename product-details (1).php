<?php
	session_start();
	include("session_check.php");
	if(!isset($_SESSION['ab_user']))
	{
		echo '<script type="text/javascript">
			   window.location = "'.$strSiteUrl.'index.php"
		  </script>'; 
		exit();
	}
	
	$product_id = 0;
	$dtProduct = array();
	$dtProductImages = array();
	$dtProductCategory = array();
	$dtRelatedProduct = array();
	
	
	
	
	
	
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
	
	
	if(isset($_REQUEST['p']))
	{
	   $product_id = $_REQUEST['p'];
		
	   $strSql = "
		select  pr.*, zn.zone_name,
				case 
					when  pr.product_sustain = 'S' then 'Yes'
					else 'No'
				 end product_sustain_mod,
				case 
					when  pr.product_type = 'V' then 'Vernacular'
					else 'Modern'
				 end product_type_mod,
				us.usr_name, us.usr_address, us.usr_city, us.usr_state,
				case 
					when trim(ifnull(us.usr_image,'')) = '' then 'user_default_profile.jpg'
					else us.usr_image
				 end usr_image
		  from  tblproduct pr
    inner join  tblzone zn on pr.zone_id = zn.zone_id
	inner join  users us on pr.usr_id = us.usr_id
		 where  pr.product_id = ".$product_id."
		";
		$dtProduct = getDatatable($strSql);
		
		
		
		
	   $strSql = "
		select  * 
		  from  product_images
		 where  product_id = ".$product_id."
		   and  pimg_status = 'A'
	  order by  pimg_order
		";
		$dtProductImages = getDatatable($strSql);
		
		print_r($dtProductImages);
		
		
		$strSql = "
		select  group_concat(cat.cat_name) cat_name 
		  from  tblproduct_category pcat
	inner join  tblcategories cat on pcat.pcat_id = cat.id
		   and  pcat.product_id = ".$product_id."
		";
		$dtProductCategory = getDatatable($strSql);
		
		
		$strSql = "
			select  pr.product_id, pr.product_picture, pr.product_name 
			  from  tblproduct pr
		inner join  tblproduct_category pcat on pr.product_id = pcat.product_id
		inner join  tblproduct_category mp on pcat.cat_id = mp.cat_id
			   and  mp.product_id = ".$product_id."
			   and  pr.product_id <> ".$product_id."
			   and  pr.product_status = 'A'
		";
		$dtRelatedProduct = getDatatable($strSql);
	}
	
	
	?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/insidepage-banner.png" alt="inside-page">
    </section>


    <section class="product-details-mainblock">
        <div class="container">
            
            <div class="breadcrumb-block">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Hardwood Flooring & Wooden Floor Tiles</a></li>
                    <li class="breadcrumb-item"><a href="#">Wooden Flooring</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wooden Floor Tiles</li>
                  </ol>
                </nav>
            </div>

            <div class="product-details-topblock">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">                   
                                <div class="product-details-topblock-left">
                                    <div class="product-main-gallery">
                                        
                                        <!---produt-gallery--->

                                        <div class="exzoom hidden" id="exzoom">
                                            <div class="exzoom_img_box">
                                                <ul class='exzoom_img_ul'>
													<?php
													for($iRowCount=0;$iRowCount<=count($dtProductImages)-1;$iRowCount++)
													{
														echo '<li><img src="admin/uploads/product/'.$dtProductImages[$iRowCount]['pimg_file_path'].'"/></li>';
													}
													?>
                                                </ul>
                                            </div>
                                            <div class="thumleft-block">
                                                <div class="exzoom_nav"></div>
                                                <p class="exzoom_btn">
                                                    <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                                </p>
                                            </div>
                                        </div>

                                        <!---produt-gallery--end--->

                                    </div>

                                    <!----product-quant
                                    <div class="product-quant-block">
                                        <p>Fill the quantity to get latest price!</p>
                                        <div class="product-quant-form">
                                            <form>
                                                <div class="quant-form-box">
                                                    <label>Quantity</label>
                                                    <input type="text" class="form-control">
                                                    <select class="form-control">
                                                      <option value="sq ft" hidden="" optionid="12654216">sq ft</option>
                                                      <option value="Box" optionid="12654217">Box</option>
                                                      <option value="Other" optionid="12654218">Other</option>
                                                    </select>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="product-quant-button-block">
                                            <a class="btn get-latest-price-btn">
                                                <div class="get-latest-price-btn-box">
                                                    Get Latest Price
                                                    <span>Request a quote</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!----product-quant--end--->

                                </div>
                            </div>
                            <div class="col-sm-7"> 
                                <div class="product-details-topblock-right">

                                    <div class="product-short-details-block">

                                        <div class="product-short-details">

                                            <div class="product-titel">
                                                <h2 class="titel"><?php echo $dtProduct[0]['product_name'];?></h2>
                                            </div>

                                            <div class="product-price-mainblock">

                                                <div class="product-price-block">
                                                    <span class="courant-price">₹<?php echo $dtProduct[0]['product_price'];?></span>
                                                    <!-- <span class="old-price">₹998</span> 
                                                    <span class="discount-price">50% off</span> -->
                                                </div>
												<!--
                                                <div class="price-info">
                                                    <div class="dropdown">
                                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                      </button>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        info Tesxt
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="get-latest-price">
                                                    <a href="#" class="btn get-latest-price-btn">Get Latest Price</a>
                                                </div>
												-->

                                            </div>
											<!--
                                            <div class="product-color-select-block">
                                                <h3 class="titel">Color name: <b>White Diamonds</b></h3>
                                                <div class="color-list-block">
                                                    <a href="#" class="color-box active" style="background-color:#ccc">
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="color-box" style="background-color:#ccc">
                                                        <span>
                                                            <img src="recent-product4.jpg" alt="">
                                                        </span>
                                                    </a>
                                                    <a href="#" class="color-box" style="background-color:#ccc">
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="color-box" style="background-color:#ccc">
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="color-box" style="background-color:#ccc">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
											-->

                                            <div class="product-short-details-list">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="tdwdt"> Category </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProductCategory[0]["cat_name"];?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdwdt"> Zone </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['zone_name'];?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdwdt"> Sustainable </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_sustain_mod'];?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdwdt"> Type </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_type_mod'];?> </td>
                                                        </tr>
														<!--
                                                        <tr>
                                                            <td class="tdwdt"> Economical Impact </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_eco_value'];?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdwdt"> Social Impact</td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_social_value'];?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tdwdt"> Environmental Impact </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_env_value'];?> </td>
                                                        </tr>
														<tr>
                                                            <td class="tdwdt"> Modern Advancement </td>
                                                            <td class="tdwdt1 color6"> <?php echo $dtProduct[0]['product_modern_value'];?> </td>
                                                        </tr>
														-->
                                                    </tbody>
                                                </table>
                                            </div>
											<!--
                                            <div class="view-complete-details">
                                                <a href="#viewCompleteDetails" class="link">View Complete Details</a>
                                            </div>
											-->

                                        </div>


                                        <div class="product-seller-details">
                                            
                                            <div class="seller-details-box">

                                                <div class="seller-details-header">
                                                    <div class="seller-image">
                                                        <img src="profile/<?php echo $dtProduct[0]['usr_image'];?>" alt="">
                                                    </div>
                                                </div>

                                                <div class="seller-details-content">

                                                    <div class="seller-name-address">
                                                        <h3 class="seller-name"><?php echo $dtProduct[0]['usr_name'];?></h3>
                                                        <div class="seller-address">
                                                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                                            <span class="address"><?php echo $dtProduct[0]['usr_address'];?></span>
                                                        </div>
                                                    </div>

                                                    <div class="seller-details-list">
                                                        <ul class="list">
                                                            <li>
                                                                <a href="#">
                                                                <div class="list-box">
                                                                    <i class="list-icon star-supplier"></i>
                                                                    <span class="lh11"><?php echo $dtProduct[0]['usr_state'];?></span>
                                                                </div></a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                <div class="list-box">
                                                                    <i class="list-icon trustseal-verified"></i>
                                                                    <span class="lh11"><?php echo $dtProduct[0]['usr_city'];?></span>
                                                                </div></a>
                                                            </li>
															
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="contact-seller-block">
                                                    <p>Ask for more details from the seller</p>
                                                    <a href="javascript:void(0);">
                                                        <i class="msic pr spfirst pdinb"></i>
                                                        <span class="clink1 bo fs16">Contact Seller</span>
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
										
										
										
                                    </div>


                                    <div class="product-description-block">
                                        <h3 class="titel">Description</h3>
                                        <?php echo $dtProduct[0]['product_desc'];?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-chart-block" style="display:none;" >
                <div class="row">

                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Economic Impact</h5>
                            <div class="chart-box">
                                <img src="images/chart-image.png" alt="">
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Social Impact</h5>
                            <div class="chart-box">
                                <img src="images/chart-image.png" alt="">
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Environmental Impact</h5>
                            <div class="chart-box">
                                <img src="images/chart-image.png" alt="">
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Modern Advancement</h5>
                            <div class="chart-box">
                                <img src="images/chart-image.png" alt="">
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="calculator-mainblock">
                <img src="images/calcluter-image.png" alt="banner">
            </div>



            <div class="full-product-details-block" id="viewCompleteDetails" style="display:none;">
                <!------tab-start-------->

                <ul class="nav nav-tabs">
                    <li><a class="active" href="#productDetails" data-toggle="tab">Product Details</a></li>  
                    <li><a href="#company-details" data-toggle="tab">Company Details</a></li>
                    <li><a href="#economic-impact" data-toggle="tab">Economic Impact</a></li>
                    <li><a href="#social-impact" data-toggle="tab">Social Impact</a></li>
                    <li><a href="#environmental-impact" data-toggle="tab">Environmental Impact</a></li>
                    <li><a href="#modern-advancement" data-toggle="tab">Modern Advancement</a></li>
                </ul>

                <div class="card">
                    <div class="card-body">
                        
                        <div class="tab-content">

                            <div class="tab-pane active" id="productDetails">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#productDetailsTab">
                                      Product Details
                                    </a>
                                  </h4>
                                </div>
                                <div id="productDetailsTab" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    

                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 111</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?<br>
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>



                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="tab-pane" id="company-details">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#company-details-tab">
                                      Company Details
                                    </a>
                                  </h4>
                                </div>
                                <div id="company-details-tab" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    
                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 222</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="economic-impact">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#economic-impact-tab">
                                      Economic Impact
                                    </a>
                                  </h4>
                                </div>
                                <div id="economic-impact-tab" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    
                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 333</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="social-impact">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#social-impact-tab">
                                      Social Impact
                                    </a>
                                  </h4>
                                </div>
                                <div id="social-impact-tab" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    
                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 444</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="environmental-impact">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#environmental-impact-tab">
                                      Environmental Impact
                                    </a>
                                  </h4>
                                </div>
                                <div id="environmental-impact-tab" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    
                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 555</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="modern-advancement">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#modern-advancement-tab">
                                      Modern Advancement
                                    </a>
                                  </h4>
                                </div>
                                <div id="modern-advancement-tab" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    
                                    <div class="product-specification-list">
                                        <h3 class="titel">Product Specification 666</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> Tile Type </td>
                                                    <td> Wooden </td>
                                                </tr>
                                                <tr>
                                                    <td> Usage/Application </td>
                                                    <td> Flooring </td>
                                                </tr>
                                                <tr>
                                                    <td> Type </td>
                                                    <td> Normal Printing </td>
                                                </tr>
                                                <tr>
                                                    <td> Brand </td>
                                                    <td> Crown </td>
                                                </tr>
                                                <tr>
                                                    <td> Colour </td>
                                                    <td> Any </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="pdest1">
                                        <h3 class="titel">Product Description</h3>                        
                                        <div class="fs16 lh28 pdpCtsr">
                                            We deal in Wooden Floor Tiles. We are one of the best supplier of our area.<br><br>Products Details:<br><br>
                                            Product Type: Flooring<br>
                                            Size: Customized<br>
                                            Colour: Any            
                                            <br>
                                            
                                        </div>
                                        <div class="contact-toseler-box">
                                            <div class="lh21">Interested in this product?
                                                <span class="bo on">Get Latest Price from the seller</span>
                                            </div>
                                            <a class="btn contact-seller-btn">Contact Seller</a>
                                            
                                        </div>
                                            
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                        </div>
                        
                        <!------tab-end------->

                </div>
                </div>

            </div>


            <div class="related-products-block">
                <h2 class="titel">Related Products</h2>
                <div class="related-products-slider">
                    
                    <div class="owl-carousel related-products-carousel">
						<?php
						for($iRow=0;$iRow<=count($dtRelatedProduct)-1;$iRow++)
						{
							?>
							<a href="product-details.php?p=<?php echo $dtRelatedProduct[$iRow]['product_id'];?>">
								<div class="related-products-box">
									<img src="admin/uploads/product/<?php echo $dtRelatedProduct[$iRow]['product_picture'];?>" class="img-fluid">
									<h3><?php echo $dtRelatedProduct[$iRow]['product_name'];?></h3>
								</div>
							</a>
							<?php
						}
						?>
                    </div>

                </div>
            </div>




        </div>
    </section>



      
    <?php include("include/footer.php");?> 

	<?php include("include/js.php");?>


    <script>
      $('.related-products-carousel').owlCarousel({
        loop:true,
        margin:25,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:6,
            }
        }
    })
    </script>

    <!----gallery--->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.exzoom.js"></script>
<link href="css/jquery.exzoom.css" rel="stylesheet" type="text/css"/>


  <script type="text/javascript">

    $('.container').imagesLoaded( function() {
  $("#exzoom").exzoom({
        autoPlay: false,
    });
  $("#exzoom").removeClass('hidden')
});

</script>


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
    </script>

    <!----menu---end-->





  </body>
</html>
