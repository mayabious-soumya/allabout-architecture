<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php include("include/css.php");?> 
    <link rel='stylesheet' href="admin/dist/css/select2.min.css" type='text/css' />
    <title>allabout architecture</title>
  </head>
  <body>
     
<?php include("include/header.php");

include('admin/config/config.php');



$sql_cat=mysqli_query($conn,"SELECT `id`, `cat_name`, `cat_order`, `cat_lvl` FROM `tblcategories` WHERE `cat_status`='A' order by cat_lvl,cat_order");



$sql_zone=mysqli_query($conn,"SELECT `zone_id`, `zone_name` FROM `tblzone` WHERE `zone_status`='A'");

    ?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/insidepage-banner.png" alt="inside-page">
    </section>


    <section class="insidepage-content-block product-entry-block">
        <div class="container">
            <div class="main-titel-block">
                <h2>New Product Entry</h2>
            </div>

            <div class="product-entry-mainblock">

            <form action="saveProduct.php" method="post" enctype="multipart/form-data">
                <div class="product-entry-topblock">

                    <div class="product-entry-form">

                        <div class="form-group">
                            <label for="productName" class="col-form-label">Product Name : *</label>
                            <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="usertype :" class="col-form-label">Zone : *</label>
                            <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="zone_id">
                                 <option value="">Select Zone</option>             
                                 <?php while($row=mysqli_fetch_array($sql_zone)){ ?>
                                 <option value="<?=$row['zone_id'];?>"><?=$row['zone_name'];?></option>
                               <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="usertype :" class="col-form-label">Category : *</label>
                            <select class="select2 form-control form-select form-select-lg mb-3" name="cat_id[]" id="cat_id" required multiple="multiple" >
                                 <option value="">Select Category</option>             
                                 <?php while($row=mysqli_fetch_array($sql_cat)){ ?>
                                 <option value="<?=$row['id'];?>"><?=$row['cat_name'];?></option>
                               <?php } ?>
                            </select>
                        </div>
                       
                        <div class="form-group"> 
                            <label for="productName" class="col-form-label">Product Main Image : *</label>
                            <input type="file" class="form-control" name="product_picture" required>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productName" class="col-form-label">Product Price : *</label>
                                    <input type="number" step=".01" name="product_price" required class="form-control" id="productName" placeholder="Product Price">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productName" class="col-form-label">Product Length : *</label>
                                    <input type="number" step=".01" name="product_length" required class="form-control" id="productName" placeholder="Product Length">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productName" class="col-form-label">Product Width : *</label>
                                    <input type="number" step=".01" name="product_width" required class="form-control" id="productName" placeholder="Product Width">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="productName" class="col-form-label">Product Depth : *</label>
                                    <input type="number" step=".01" name="product_depth" required class="form-control" id="productName" placeholder="Product Depth">
                                </div>
                            </div>
                        </div>
                        
                        

                       <div class="form-group">
                            <label for="productName" class="col-form-label">Product Images : *</label>
                            <input type="file" class="form-control" name="files[]" multiple required>
                        </div> 

                    <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                    <label > Sustainability </label>
                                    <div class="radio-list">
                                        <label>
                                        <input type="radio" name="product_sustain" value="S" checked />
                                        Sustainable </label>
                                        <label>
                                        <input type="radio" name="product_sustain" value="US"  />
                                         Not Sustainable </label>                      
                                        
                                    </div>           
                             </div>
                          </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                          <label for="name">Type</label>
                            <div class="radio-list">
                                    <label>
                                    <input type="radio" name="product_type" value="V" />
                                    Vernacular </label>
                                    <label>
                                    <input type="radio" name="product_type" value="M" checked />
                                     Modern </label>                      
                                    
                                </div>                      
                          </div> 
                        </div>
                    </div>
                   

                    <div class="form-group"> 
                        <label for="productName" class="col-form-label">Description : </label>
                        <textarea class="form-control" name="product_desc" id="product_desc"></textarea>
                    </div>
                        
                        <div class="add-product-block">
                            <!-- <button type="submit" class="btn btn-primary">+ Add</button> -->
                            <input type="hidden" name="usr_id" value="21"  />
                            <button type="submit" class="btn save-button" name="submit" value="UPLOAD">Save</button>
                        </div>
                        
                        <!-----top-entry-form---end-->
                    </div>

                </div>

                </form>

                <div class="product-details-entry-block" style="display: none;">
                    

                    
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

<script src="admin/dist/js/select2.full.min.js"></script>
<script>
$(document).ready(function() {
        
       jQuery("#cat_id").select2();
    });
</script>





   










  </body>
</html>
