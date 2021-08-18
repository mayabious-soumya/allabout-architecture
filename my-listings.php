<?php
	session_start();
	
	include("session_check.php");
	
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
	
	/*
	if(isset($_SESSION['ab_user']))
	{
		
	}
	else
	{
		echo '<script type="text/javascript">
			   window.location = "'.$strSiteUrl.'index.php"
		  </script>'; 
		exit();
	}
	*/
	
	$usr_id = $ab_user[0]['usr_id'];
	
	$strSql = "
	select product_id, product_name, product_picture,product_desc, product_viewed,
	case
		when product_status = 'A' then 'Active'
		else 'Inactive'
	end product_status
	from tblproduct 
	where usr_id = ".$usr_id."
	order by product_status, product_name
	";
	$dtSearchProduct = getDatatable($strSql);
	
	?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/insidepage-banner.png" alt="inside-page">
    </section>


    <section class="insidepage-content-block product-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>Product</h2>
				<a href="product-entry.php" class="btn save-button" style="float:right;" >Add Product</a>
            </div>
            <div class="product-block">
				<!--
                <div class="product-searc-block">
                    <div class="row searchFilter" >
                         <div class="col-sm-12" >
                          <div class="input-group" >
                           <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Product Name" >
                           <div class="input-group-btn" >
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
                            <div class="dropdown-menu dropdown-menu-right" >
                               <ul class="category_filters" >
                                <li >
                                 <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" >All</label>
                                </li>
                                <li >
                                 <input type="radio" name="radios" id="Design" value="Design" ><label class="category-label" for="Design" >Product Category Name</label>
                                </li>
                                <li >
                                 <input type="radio" name="radios" id="Marketing" value="Marketing" ><label class="category-label" for="Marketing" >Product Category Name</label>
                                </li>
                                <li >
                                 <input type="radio" name="radios" id="Programming" value="Programming" ><label class="category-label" for="Programming" >Product Category Name</label>
                                </li>
                                <li >
                                 <input type="radio" name="radios" id="Sales" value="Sales" ><label class="category-label" for="Sales" >Product Category Name</label>
                                </li>
                                <li >
                                 <input type="radio" name="radios" id="Support" value="Support" ><label class="category-label" for="Support" >Product Category Name</label>
                                </li>
                               </ul>
                            </div>
                            <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                           </div>
                          </div>
                         </div>
                      </div>
                </div>
				-->


                <!---workshop-all-box-->
                        <div class="product-all-boxs">
                            <div class="row">

								<?php
								for($iRow=0;$iRow<=count($dtSearchProduct)-1;$iRow++)
								{
									echo '
									<div class="col-sm-6 col-md-4">   
										<div class="card product-box">
											<div class="product-image">
												<img src="images/workshops-image-1.jpg" class="card-img-top" alt="workshops banner">
											</div>
											<div class="card-body">
												<h5 class="card-title">'.$dtSearchProduct[$iRow]['product_name'].'</h5>
												<h6 class="card-title">Viewed - '.$dtSearchProduct[$iRow]['product_viewed'].'</h6>
												<h6 class="card-title">Status - '.$dtSearchProduct[$iRow]['product_status'].'</h6>
												<p class="card-text">'.$dtSearchProduct[$iRow]['product_desc'].'</p>
												<a href="product-details.php?p='.$dtSearchProduct[$iRow]['product_id'].'" class="btn btn-primary">View</a>
											</div>
										</div>
									</div>
									';
								}
								?>

                            </div>
                        </div>
                        <!---workshop-all-box-->
            </div>


        </div>
    </section>



      
    <?php include("include/footer.php");?> 

	<?php include("include/js.php");?>


    <script type="text/javascript">
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:0,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
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
   
    </script>
  </body>
</html>
