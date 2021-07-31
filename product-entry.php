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
     
    <?php include("include/header.php");?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/insidepage-banner.png" alt="inside-page">
    </section>


    <section class="insidepage-content-block product-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>New Product Entry</h2>
            </div>

            <div class="product-entry-mainblock">


                <div class="product-entry-topblock">

                    <div class="product-entry-form">
                        <!-----top-entry-form--->
                        <div class="form-group row">
                            <label for="usertype :" class="col-sm-3 col-form-label">User Type :</label>
                            <div class="col-sm-9">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>select Product Type</option>
                                  <option value="1">Product User Type Name 1</option>
                                  <option value="2">Product User Type Name 2</option>
                                  <option value="3">Product User Type Name 3</option>
                                  <option value="4">Product User Type Name 4</option>
                                  <option value="5">Product User Type Name 5</option>
                                  <option value="6">Product User Type Name 6</option>
                                  <option value="7">Product User Type Name 7</option>
                                  <option value="8">Product User Type Name 8</option>
                                  <option value="9">Product User Type Name 9</option>
                                  <option value="10">Product User Type Name 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productName" class="col-sm-3 col-form-label">Product Name :</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="productName" placeholder="Product Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status :</label>
                            <div class="col-sm-9">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                  Active
                                </label>
                              </div>
                            </div>
                        </div>
                        
                        <div class="add-product-block">
                            <button type="submit" class="btn btn-primary">+ Add</button>
                        </div>
                        
                        <!-----top-entry-form---end-->
                    </div>

                </div>



                <div class="product-details-entry-block">
                    

                    <!-----all-stape----->
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Economic Impact</strong></li>
                            <li id="personal"><strong>Social Impact</strong></li>
                            <li id="payment"><strong>Environmental Impact</strong></li>
                            <li id="confirm"><strong>Modern Advancement</strong></li>
                        </ul> <!-- fieldsets -->

                        
                        <fieldset>
                            <div class="form-card">
                                <div class="header-block">
                                    <h2 class="fs-title">Economic Impact</h2>
                                </div>
                                <div class="details-box">
                                    <!------start---->
                                    <div class="form-group row">
                                        <label for="usertype :" class="col-sm-3 col-form-label">User Type :</label>
                                        <div class="col-sm-9">
                                            <p>This is the base price at which the design / product /technology /techniques is available to the customer</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unitcost" class="col-sm-3 col-form-label">
                                            Unit Cost :
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="unitcost" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="usertype :" class="col-sm-3 col-form-label">
                                            Impact on Total Cost :
                                        </label>
                                        <div class="col-sm-9">
                                            <p>In a project does the use of this product make the use of any other product either unnecessary or compulsory?</p>
                                        </div>
                                    </div>
                                    <!-----end---->
                                </div>
                                <div class="next-previous-block">
                                    <input type="button" name="previous" class="action-button previous" value="Previous" /> 
                                    <input type="button" name="next" class="action-button next" value="Next Step" />
                                </div>
                                
                        </fieldset>



                        <fieldset>
                            <div class="form-card">
                                <div class="header-block">
                                    <h2 class="fs-title">Social Impact</h2>
                                </div>
                                <div class="details-box">
                                    <!------start---->
                                    <div class="form-group row">
                                        <label for="usertype :" class="col-sm-3 col-form-label">User Type :</label>
                                        <div class="col-sm-9">
                                            <p>This is the base price at which the design / product /technology /techniques is available to the customer</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unitcost" class="col-sm-3 col-form-label">
                                            Unit Cost :
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="unitcost" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="usertype :" class="col-sm-3 col-form-label">
                                            Impact on Total Cost :
                                        </label>
                                        <div class="col-sm-9">
                                            <p>In a project does the use of this product make the use of any other product either unnecessary or compulsory?</p>
                                        </div>
                                    </div>
                                    <!-----end---->
                                </div>
                                <div class="next-previous-block">
                                    <input type="button" name="previous" class="action-button previous" value="Previous" /> 
                                    <input type="button" name="next" class="action-button next" value="Next Step" />
                                </div>
                                
                        </fieldset>
                        
                        
                    </form>
                    <!-----all-stape--end--->

                    <div class="save-back-block">
                        <button type="button" class="btn save-button">Save</button>
                         <button type="button" class="btn cancile-button">Back</button>
                    </div>

                </div>








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
