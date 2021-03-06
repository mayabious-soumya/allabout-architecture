<?php
include('checksession.php');
include('config/config.php');
$slno=$_GET['id'];

$type='0';
 if(isset($_GET['tab']))
    {
      $type=$_GET['tab'];
    }

$sql_cat=mysqli_query($conn,"SELECT `id`, `cat_name`, `cat_order`, `cat_lvl` FROM `tblcategories` WHERE `cat_status`='A' order by cat_lvl,cat_order");

$sql_usr=mysqli_query($conn,"SELECT `usr_id`, `usr_name` FROM `users` WHERE `usr_type`='M' and `usr_status`='A' order by usr_name");
$sql_zone=mysqli_query($conn,"SELECT `zone_id`, `zone_name` FROM `tblzone` WHERE `zone_status`='A'");

$arrCat=array();

$query=mysqli_query($conn,"select cat_id from tblproduct_category where product_id='".$slno."'");
while($row=mysqli_fetch_array($query)){
  array_push($arrCat,$row['cat_id']);
} 
              
$tbl_economic=mysqli_query($conn,"select * from tblproduct_economic where product_id='".$slno."'");
$tbl_environment=mysqli_query($conn,"select * from tblproduct_environment where product_id='".$slno."'");
$tbl_modern=mysqli_query($conn,"select * from tblproduct_modern where product_id='".$slno."'");
$tbl_social=mysqli_query($conn,"select * from tblproduct_social where product_id='".$slno."'");



$row_economic=mysqli_fetch_array($tbl_economic);
$row_social=mysqli_fetch_array($tbl_social);
$row_modern=mysqli_fetch_array($tbl_modern);
$row_environment=mysqli_fetch_array($tbl_environment);

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Allabout Architecture | Dashboard <?php //echo $_SESSION['user_id'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/sweetalert.min.css">
<link rel="stylesheet" href="dist/css/sweetalert.css">
<link rel='stylesheet' href="dist/css/select2.min.css" type='text/css' />
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

<style type="text/css">
  .control-label {font-weight: normal;}


</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">

  <?php include('include/header.php');?>
  <?php include('include/leftmenu.php'); ?>

 <div class="content-wrapper">
    <section class="content-header">
     <h1>
        Edit Product
        
      </h1> 
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" style="background-color:#3c8dbc;color:#3c8dbc">
              <li id="tab1" class="active"><a href="#Product" data-toggle="tab">Product</a></li>
              <li id="tab2"><a href="#ProImg" data-toggle="tab">Product Images</a></li>
              <li id="tab3"><a href="#Social" data-toggle="tab">Social Impact</a></li>
              <li id="tab4" ><a href="#Environmental" data-toggle="tab">Environmental Impact</a></li>
              <li id="tab5"><a href="#Modern" data-toggle="tab">Modern Advancement</a></li>              
              <li id="tab6"><a href="#Economic" data-toggle="tab">Economic Impact</a></li>
            </ul>
    
      <div class="tab-content">




  <div class="active tab-pane" id="Product">
     
<?php $editquery=mysqli_query($conn,"select * from tblproduct where product_id='".$slno."'");
   while($row1=mysqli_fetch_array($editquery)){ ?>
    <form id="edit_product_form" enctype="multipart/form-data">  

       <div class="row">

            <div class="col-md-6">
              <div class="form-group">
              <label for="name">Name *</label>
                <input type="text" class="form-control" name="product_name" id="product_name"  placeholder="Name" value="<?=$row1['product_name'];?>">
              </div> 
            </div>

            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">User *</label>
                <select class="form-control" name="usr_id" id="usr_id" style="text-transform: uppercase;">
                  <option value="">Select User</option>             
                 <?php while($row=mysqli_fetch_array($sql_usr)){ ?>
                 <option value="<?=$row['usr_id'];?>" <?php if($row1['usr_id']===$row['usr_id']){ echo 'selected'; } ?>><?=$row['usr_name'];?></option>
               <?php } ?>
                </select>                
               </div>             
            </div>            
      </div>

      <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="name">Zone *</label>
                 <select class="form-control" name="zone_id" id="zone_id" style="text-transform: uppercase;">                 
                  <option value="">Select Zone</option>             
                 <?php while($row=mysqli_fetch_array($sql_zone)){ ?>
                 <option value="<?=$row['zone_id'];?>" <?php if($row1['zone_id']===$row['zone_id']){ echo 'selected'; } ?>><?=$row['zone_name'];?></option>
               <?php } ?>
                </select>
                
              </div>
             
            </div>
      
            <div class="col-md-6">
            <div class="form-group">
              <label for="name">Product Image *</label>
               <input type="file" class="form-control" name="product_picture" id="product_picture">
              </div>
            </div>            
          </div>

            
         

        <div class="row">            
          <div class="col-md-6">
              <div class="form-group catagory-select2-box">
                <label for="name">Category *</label>
                    <select  name="cat_id[]" class="select2 form-control form-select" required multiple="multiple" id="cat_id" >
                      <option value="">Select Category</option>             
                     <?php while($row=mysqli_fetch_array($sql_cat)){ 
                      $selected = in_array($row['id'], $arrCat) ? 'selected' : ''; ?>
                     <option value="<?=$row['id'];?>" <?php echo $selected; ?>><?=$row['cat_name'];?></option>
                   <?php } ?>
                    </select>                
             </div>
           </div>

           <div class="col-md-3">
              <div class="form-group">
              <label for="name">Price *</label>
                  <input type="number" class="form-control" step=".01" required name="product_price" id="product_price" required autocomplete="off" value="<?=$row1['product_price'];?>">                     
              </div> 
            </div>

           <div class="col-md-3">
              <div class="form-group">
              <label for="name">Active</label><br>
               
                <input type="checkbox" id="status" name="status" value="1" <?php if($row1['product_status']=='A'){ echo 'checked';} ?>> Active   
                <img src="uploads/product/<?=$row1['product_picture'];?>" width="40px;" height="40px;">  <input type='hidden' name="old_img"  value="<?=$row1['product_picture'];?>">                 
              </div> 
            </div>         
         
        </div> 
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
              <label for="name">Length *</label>
                  <input type="number" class="form-control" step=".01" name="product_length" required autocomplete="off" value="<?=$row1['product_length'];?>">                     
              </div> 
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="name">Width *</label>
                  <input type="number" class="form-control" step=".01" name="product_width" required autocomplete="off" value="<?=$row1['product_width'];?>">                     
              </div> 
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="name">Depth *</label>
                  <input type="number" class="form-control" step=".01" name="product_depth" required autocomplete="off" value="<?=$row1['product_depth'];?>">                     
              </div> 
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                    <label > Sustainability </label>
                     <?php if($row1['product_sustain']=='S')
                            {
                              $radio_sustain_1='checked';
                              $radio_sustain_2='';                              
                            }                            
                            else 
                            {
                              $radio_sustain_1='';                              
                              $radio_sustain_2='checked';
                            }

                           ?>
                    <div class="radio-list">
                        <label>
                        <input type="radio" name="product_sustain" value="S" <?php echo $radio_sustain_1;?> />
                        Sustainable </label>
                        <label>
                        <input type="radio" name="product_sustain" value="US" <?php echo $radio_sustain_2;?> />
                         Not Sustainable </label>                      
                        
                    </div>           
             </div>
          </div>


            <div class="col-md-6">
              <div class="form-group">
              <label for="name">Type</label>
                  <?php if($row1['product_type']=='V')
                            {
                              $radio_Type_1='checked';
                              $radio_Type_2='';                              
                            }                            
                            else 
                            {
                              $radio_Type_1='';                              
                              $radio_Type_2='checked';
                            }

                           ?>
                <div class="radio-list">
                        <label>
                        <input type="radio" name="product_type" value="V" <?php echo $radio_Type_1;?>/>
                        Vernacular </label>
                        <label>
                        <input type="radio" name="product_type" value="M" <?php echo $radio_Type_2;?> />
                         Modern </label>                      
                        
                    </div>                      
              </div> 
            </div>
        </div>  
        


         <div class="row">
           <div class="col-md-12">
            <div class="form-group">
              <label for="name">Description </label>
               <textarea class="form-control" name="cke_desc" ><?=$row1['product_desc'];?></textarea>
                 
               <input type="hidden" name="product_desc" id="product_desc"></input>
              </div> 
          </div>
        </div>    


        <div class="row">
            <div class="col-md-12">
              <button type="submit" id="submit_product" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
            </div>

           
        </div>
        <div class="row">
            <div class="col-md-12">
             <p id="product_message" style="display:none;"></p>
            </div>
        </div>
      </form>
    <?php } ?>
     </div>

    <div class="tab-pane" id="ProImg"> 
      <form id="frm_product_Images" enctype="multipart/form-data">  
       <div class="row">       
          <div class="col-md-6">
              <div class="form-group">
                <label for="name">Product Image *</label>
                 <input type="file" class="form-control" name="product_img" required>
                </div>
              </div>
         </div>
         <div class="row">
              <div class="col-md-12">
                <button type="submit" id="submit_productImg" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
              </div>
             
        </div>
        <hr>
         <div class="row">
         <?php $queryImg=mysqli_query($conn,"SELECT * FROM `product_images` p where product_id=".$slno);
  
          $i=1;
          while($rowImg=mysqli_fetch_array($queryImg)){          
          
      ?>
                <div class="col-md-6" id="dvImg_<?php echo $rowImg['pimg_id'];?>">
                  <?php echo $i;?>
                  <img src="uploads/product/<?=$rowImg['pimg_file_path'];?>" width="80px;" height="80px;">
                 
                 <?php echo $rowImg['pimg_name'];?> 
                 <a href="javascript:void(0);" class="demo btn btn-danger btn-xs" onclick="fnDeleteImage(<?php echo $rowImg['pimg_id'];?>);"><i class="fa fa-remove"></i> Delete</a>
                 </div>
        <?php 
        $i++;
        } ?> 
        </div>
      </form>
    </div>

    <div class="tab-pane" id="Economic"> 
      <form id="edit_Economic_form" enctype="multipart/form-data">  
       <div class="row">

            <div class="form-group">
                <label class="control-label col-md-3"><strong>Initial cost</strong></label>
                <div class="col-md-9">
                    <span class="help-block">
                    This is the base price at which the design / product /technology /techniques is available to the customer </span>
                </div>
            </div>
                    
            <div class="form-group">
                <label class="control-label col-md-3">Unit Cost </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Unit Cost" name="peco_unit_cost" id="peco_unit_cost" value="<?php echo $row_economic['peco_unit_cost']; ?>" >
                                    
                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_unit_cost_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_unit_cost_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>

            </div>
          
           <div class="clearfix"></div>
           <hr>

            <div class="form-group">
                <label class="control-label col-md-3"><strong>Impact on Total Cost</strong></label>
                <div class="col-md-9">
                    <span class="help-block">
                    In a project does the use of this product make the use of any other product either unnecessary or compulsory? </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Project Specific</label>
                <div class="col-md-3">
                    <div class="radio-list">
                        <label>
                          <?php if($row_economic['peco_project_specific_yes_no']=='Y')
                            {
                              $radioEcho1='checked';
                              $radioEcho2='';
                            }
                            else
                            {
                              $radioEcho2='checked';
                              $radioEcho1='';
                            }

                           ?>
                        
                        <input type="radio" name="peco_project_specific_yes_no" value="Y" <?php echo $radioEcho1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="peco_project_specific_yes_no" value="N" <?php echo $radioEcho2;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_project_specific_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_project_specific_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>    

                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="peco_project_specific_note"  value="<?php echo $row_economic['peco_project_specific_note'];?>" >                     
                </div>
                    
            </div>

            <div class="clearfix"></div>
           <hr>
                    
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Maintenance</strong></label>
                <div class="col-md-9">
                    <span class="help-block">
                    The technical meaning of maintenance involves functional checks, servicing, repairing or replacing of necessary devices, equipment, machinery, building infrastructure, and supporting utilities??  </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Frequency </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Frequency" name="peco_frequency"  value="<?php echo $row_economic['peco_frequency']; ?>" >                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_frequency_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_frequency_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>

            <div class="form-group">
                <label class="control-label col-md-3">Cost incurred for Maintenance each time </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Maintenance Cost"  name="peco_maintenance_cost"  value="<?php echo $row_economic['peco_maintenance_cost']; ?>" >                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_frequency_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_frequency_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            
            <!-- Start Operation Cost-->
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Operation Cost</strong></label>
                <div class="col-md-9">
                    <span class="help-block">
                    Operating costs or operational costs, are the expenses which are related to the operation of a business, or to the operation of a device, component, piece of equipment or facility. They are the cost of resources used by an organization just to maintain its existence.</span>
                </div>
            </div>
            

            <div class="form-group">
                <label class="control-label col-md-3">Manpower Cost (Yearly) </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Manpower Cost" name="peco_manpower_cost"  value="<?php echo $row_economic['peco_manpower_cost']; ?>" >                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_manpower_cost_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_manpower_cost_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">Material Cost </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Material Cost" name="peco_material_cost"  value="<?php echo $row_economic['peco_material_cost']; ?>" >                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_material_cost_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_material_cost_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
                    <!-- End Operation Cost-->
                    
                    <!-- Start Wranty -->
            <div class="form-group">
                <label class="control-label col-md-3">Warranty</label>
                <div class="col-md-3">
                    <div class="radio-list">
                        <label>
                          <?php if($row_economic['peco_warranty_yes_no']=='Y')
                            {
                              $radioEcho3='checked';
                              $radioEcho4='';
                            }
                            else
                            {
                              $radioEcho4='checked';
                              $radioEcho3='';
                            }

                           ?>
                        
                        <input type="radio" name="peco_warranty_yes_no" value="Y" <?php echo $radioEcho3;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="peco_warranty_yes_no" value="N" <?php echo $radioEcho4;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_warranty_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_warranty_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>    

                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="peco_warranty_note"  value="<?php echo $row_economic['peco_warranty_note'];?>" >                     
                </div>
                    
            </div>

            <div class="clearfix"></div>
           <hr>
                    <!-- End Wranty -->
                    
                    <!-- Start Job Creation -->
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Job Creation</strong></label>
                <div class="col-md-9">
                    <span class="help-block">Does your Venture promote/ support any vulnerable community by providing them opportunities?</span>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Type of job creation</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Type of job creation" name="peco_type_of_job" value="<?php echo $row_economic['peco_type_of_job']; ?>" >
                </div>                
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_type_of_job_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_type_of_job_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">Size of market</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Size of market" name="peco_market_size" value="<?php echo $row_economic['peco_market_size']; ?>" >
                </div>                
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="peco_market_size_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_economic['peco_market_size_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
                                       
                    <!-- END - Economic -->

       </div> 

       <div class="row">
            <div class="col-md-12">
              <button type="submit" id="btn_eco" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
            </div>

           
        </div>
       </form>
     </div>

    <div class="tab-pane" id="Social">  
    
        <form id="edit_Social_form" enctype="multipart/form-data">  

          <div class="row">

              <div class="form-group">
                  <label class="control-label col-md-3"><strong>Vernacular technologies</strong></label>
                  <div class="col-md-9">
                      <span class="help-block">
                      There are age old local practices of doing certain form of works : painting , plastering, flooring practices.</span>
                  </div>
              </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Livelihood generation (Does it help to build sustainable community)</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_livelihood']=='Y')
                            {
                              $radioSocial_1='checked';
                              $radioSocial_2='';
                            }
                            else
                            {
                              $radioSocial_2='checked';
                              $radioSocial_1='';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_livelihood" value="Y" <?php echo $radioSocial_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_livelihood" value="N" <?php echo $radioSocial_2;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="psocial_livelihood_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_social['psocial_livelihood_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Manpower Training</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_vt_manpower_training']=='Y')
                            {
                              $radioSocialm_1='checked';
                              $radioSocialm_2='';
                              $radioSocialm_3='';
                            }
                            else if($row_social['psocial_vt_manpower_training']=='N')
                            {
                              $radioSocialm_1='';
                              $radioSocialm_2='checked';
                              $radioSocialm_3='';
                            }
                            else 
                            {
                              $radioSocialm_1='';
                              $radioSocialm_2='';
                              $radioSocialm_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_vt_manpower_training" value="Y" <?php echo $radioSocialm_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_vt_manpower_training" value="N" <?php echo $radioSocialm_2;?> />
                        No </label>
                        <label><input type="radio" name="psocial_vt_manpower_training" value="DN" <?php echo $radioSocialm_3;?> />
                        Dont know </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="psocial_vt_manpower_training_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_social['psocial_vt_manpower_training_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
                </div>
                 <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Type</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Type" name="psocial_type" value="<?php echo $row_social['psocial_type'];?>" >                          
                        
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_type_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_type_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Manpower (In number)</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Manpower" name="psocial_manpower"  value="<?php echo $row_social['psocial_manpower'];?>" >                              
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_manpower_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_manpower_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                    <!-- End Vernacular technologies -->
                    <!-- Start Vernacular Products -->
                <div class="form-group">
                    <label class="control-label col-md-3"><strong>Vernacular Products</strong></label>
                    <div class="col-md-9">
                        <span class="help-block">
                        Product developed very specific for a region. The cost to make that product beyond that region will be higher</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Product description </label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Product description " name="psocial_product_description" value="<?php echo $row_social['psocial_product_description']; ?>" >
                    </div>                
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                      <div class="col-md-3">
                         <select name="psocial_product_description_point"  class="control-label col-md-4">
                          <?php
                            $iPoint=$row_social['psocial_product_description_point'];
                            for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                    <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                           <?php } ?>
                         </select> 
                      </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Manpower Training </label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Manpower Training" name="psocial_vp_manpower_training" value="<?php echo $row_social['psocial_vp_manpower_training']; ?>" >
                  </div>                
                  <label class="control-label col-md-1">&nbsp;</label>
                  <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_vp_manpower_training_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_vp_manpower_training_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
               </div>
               <div class="clearfix"></div>
               <div class="form-group"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Specific local material</label>
                  <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Specific local material" name="psocial_specific_local_material" value="<?php echo $row_social['psocial_specific_local_material']; ?>" >
                  </div>                
                  <label class="control-label col-md-1">&nbsp;</label>
                  <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_specific_local_material_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_specific_local_material_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
              </div>
                    <!-- End Vernacular Products -->
                    <!-- Start Cultural heritage preservation -->
              <div class="clearfix"></div>
              <hr>
              <div class="form-group">
                  <label class="control-label col-md-3"><strong>Cultural heritage preservation</strong></label>
                  <div class="col-md-9">
                      <span class="help-block">
                      </span>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Documented Historical Reference</label>
                  <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_historical_reference']=='Y')
                            {
                              $radioSocialh_1='checked';
                              $radioSocialh_2='';
                              $radioSocialh_3='';
                            }
                            else if($row_social['psocial_historical_reference']=='N')
                            {
                              $radioSocialh_1='';
                              $radioSocialh_2='checked';
                              $radioSocialh_3='';
                            }
                            else 
                            {
                              $radioSocialh_1='';
                              $radioSocialh_2='';
                              $radioSocialh_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_historical_reference" value="Y" <?php echo $radioSocialh_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_historical_reference" value="N" <?php echo $radioSocialh_2;?> />
                        No </label>
                        <label><input type="radio" name="psocial_historical_reference" value="DN" <?php echo $radioSocialh_3;?> />
                        Dont know </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="psocial_historical_reference_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_social['psocial_historical_reference_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>               
              </div>

              <div class="clearfix"></div>
              <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="psocial_historical_reference_note" value="<?php echo $row_social['psocial_historical_reference_note'];?>" >                          
                    
                </div>                    
              </div>
              <div class="clearfix"></div>
              <div class="form-group"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Size of Community</label>
                  <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Size of Community" name="psocial_community_size" value="<?php echo $row_social['psocial_community_size']; ?>" >
                  </div>                
                  <label class="control-label col-md-1">&nbsp;</label>
                  <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_community_size_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_community_size_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Economic Relevance</label>
                  <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Economic Relevance" name="psocial_economic_relevance" value="<?php echo $row_social['psocial_economic_relevance']; ?>" >
                  </div>                
                  <label class="control-label col-md-1">&nbsp;</label>
                  <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="psocial_economic_relevance_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_social['psocial_economic_relevance_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
              </div>
              <div class="clearfix"></div>
              <hr>
                    <!-- End Cultural heritage preservation -->
                    <!-- Start Barrier free design -->
              <div class="form-group">
                  <label class="control-label col-md-3"><strong>Barrier free design</strong></label>
                  <div class="col-md-9">
                      <span class="help-block">The term barrier-free design was first used in the 1950s to describe the effort of removing physical barriers from the "built environment" for people with disabilities. Barrier-free design addresses the issue of access</span>
                  </div>
              </div>
              <div class="form-group">
                 <label class="control-label col-md-12">Does your DG/PD/TG/TC help to improve access for</label>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    <label class="control-label col-md-3">Children</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_improve_access_children']=='Y')
                            {
                              $radioSocialc_1='checked';
                              $radioSocialc_2='';
                              $radioSocialc_3='';
                            }
                            else if($row_social['psocial_improve_access_children']=='N')
                            {
                              $radioSocialc_1='';
                              $radioSocialc_2='checked';
                              $radioSocialc_3='';
                            }
                            else 
                            {
                              $radioSocialc_1='';
                              $radioSocialc_2='';
                              $radioSocialc_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_improve_access_children" value="Y" <?php echo $radioSocialc_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_improve_access_children" value="N" <?php echo $radioSocialc_2;?> />
                        No </label>
                       <label> <input type="radio" name="psocial_improve_access_children" value="DN" <?php echo $radioSocialc_3;?> />
                        Dont know </label>
                        
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    <label class="control-label col-md-3">Elderly</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_improve_access_elderly']=='Y')
                            {
                              $radioSociale_1='checked';
                              $radioSociale_2='';
                              $radioSociale_3='';
                            }
                            else if($row_social['psocial_improve_access_elderly']=='N')
                            {
                              $radioSociale_1='';
                              $radioSociale_2='checked';
                              $radioSociale_3='';
                            }
                            else 
                            {
                              $radioSociale_1='';
                              $radioSociale_2='';
                              $radioSociale_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_improve_access_elderly" value="Y" <?php echo $radioSociale_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_improve_access_elderly" value="N" <?php echo $radioSociale_2;?> />
                        No </label>
                       <label> <input type="radio" name="psocial_improve_access_elderly" value="DN" <?php echo $radioSociale_3;?> />
                        Dont know </label>
                        
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    <label class="control-label col-md-3">Differently abled</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_improve_access_differnt_able']=='Y')
                            {
                              $radioSociald_1='checked';
                              $radioSociald_2='';
                              $radioSociald_3='';
                            }
                            else if($row_social['psocial_improve_access_differnt_able']=='N')
                            {
                              $radioSociald_1='';
                              $radioSociald_2='checked';
                              $radioSociald_3='';
                            }
                            else 
                            {
                              $radioSociald_1='';
                              $radioSociald_2='';
                              $radioSociald_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_improve_access_differnt_able" value="Y" <?php echo $radioSociald_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_improve_access_differnt_able" value="N" <?php echo $radioSociald_2;?> />
                        No </label>
                       <label> <input type="radio" name="psocial_improve_access_differnt_able" value="DN" <?php echo $radioSociald_3;?> />
                        Dont know </label>
                        
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    <label class="control-label col-md-3">Vulnerable Communities</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_social['psocial_improve_access_communities']=='Y')
                            {
                              $radioSocialv_1='checked';
                              $radioSocialv_2='';
                              $radioSocialv_3='';
                            }
                            else if($row_social['psocial_improve_access_communities']=='N')
                            {
                              $radioSocialv_1='';
                              $radioSocialv_2='checked';
                              $radioSocialv_3='';
                            }
                            else 
                            {
                              $radioSocialv_1='';
                              $radioSocialv_2='';
                              $radioSocialv_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="psocial_improve_access_communities" value="Y" <?php echo $radioSocialv_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="psocial_improve_access_communities" value="N" <?php echo $radioSocialv_2;?> />
                        No </label>
                       <label> <input type="radio" name="psocial_improve_access_communities" value="DN" <?php echo $radioSocialv_3;?> />
                        Dont know </label>
                        
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    

                <label class="control-label col-md-4">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="psocial_improve_access_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_social['psocial_improve_access_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
                </div>

                   
                    <!-- End Barrier free design -->.
                    <!-- END - Social Impact  -->

    
       </div> 

       <div class="row">
            <div class="col-md-12">
              <button type="submit" id="btn_eco" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
            </div>

           
        </div>
       </form>
     
    </div>

     <div class="tab-pane" id="Environmental"> 
     
      <form id="frm_Environmental">

      <div class="row"> 

          <div class="form-group">
              <label class="control-label col-md-3"><strong>Recycleable</strong></label>
              <div class="col-md-9">
                  <span class="help-block">Recycling means turning an item into raw materials which can be used again, usually for a completely new product.</span>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3">Product description </label>
              <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Product description " name="penv_description" value="<?php echo $row_environment['penv_description'];?>" >
                  </div>
                  <label class="control-label col-md-1">&nbsp;</label>
                  <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_description_point"  class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_description_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Additional energy for conversion</label>
                  <div class="col-md-3">                      
                      <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_conversion_eng']=='Y')
                            {
                              $radioEnv_eng_1='checked';
                              $radioEnv_eng_2='';
                              $radioEnv_eng_3='';
                            }
                            else if($row_environment['penv_conversion_eng']=='N')
                            {
                              $radioEnv_eng_1='';
                              $radioEnv_eng_2='checked';
                              $radioEnv_eng_3='';
                            }
                            else 
                            {
                              $radioEnv_eng_1='';
                              $radioEnv_eng_2='';
                              $radioEnv_eng_3='checked';
                            }

                           ?>
                        
                        <input type="radio" name="penv_conversion_eng" value="Y" <?php echo $radioEnv_eng_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="penv_conversion_eng" value="N" <?php echo $radioEnv_eng_2;?> />
                        No </label>
                       <label> <input type="radio" name="penv_conversion_eng" value="DN" <?php echo $radioEnv_eng_3;?> />
                        Dont know </label>                        
                    </div>
                  </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_conversion_eng_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_conversion_eng_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
              </div>
              <div class="clearfix"></div>              
              <div class="form-group">
                  <label class="control-label col-md-3">&nbsp;</label>
                  <div class="col-md-9">
                      <input type="text" class="form-control" placeholder="Note" name="penv_conversion_eng_note"  value="<?php echo $row_environment['penv_conversion_eng_note'];?>" >                     
                  </div>
                      
              </div>
              <div class="clearfix"></div>
              <div class="form-group"></div>
              <div class="form-group">
                  <label class="control-label col-md-3">Worth on New Product</label>
                  <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_rcl_new_product']=='Y')
                            {
                              $radioEnv_new_1='checked';
                              $radioEnv_new_2='';                             
                            }                           
                            else 
                            {
                              $radioEnv_new_1='';                              
                              $radioEnv_new_2='checked';
                            }

                           ?>
                        
                        <input type="radio" name="penv_rcl_new_product" value="Y" <?php echo $radioEnv_new_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="penv_rcl_new_product" value="N" <?php echo $radioEnv_new_2;?> />
                        No </label>                     
                        
                    </div>
                  </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_rcl_new_product_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_rcl_new_product_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_rcl_new_product_note"  value="<?php echo $row_environment['penv_rcl_new_product_note'];?>" >                     
                </div>
                    
            </div>
            <div class="clearfix"></div>
            <hr>
                        <!-- End - Recycleable  -->
                        <!-- Start - Reuseable  -->
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Reuseable</strong></label>
                <div class="col-md-9">
                    <span class="help-block">Reusing??refers to using an object as it??is??without treatment. This reduces pollution and waste, thus making it a more sustainable process</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Original Use </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Original Use " name="penv_original_use" value="<?php echo $row_environment['penv_original_use'];?>" > 
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                <div class="col-md-3">
                   <select name="penv_original_use_point"  class="control-label col-md-4">
                    <?php
                      $iPoint=$row_environment['penv_original_use_point'];
                      for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                              <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                     <?php } ?>
                   </select> 
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">New Use </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="New Use " name="penv_new_use" value="<?php echo $row_environment['penv_new_use'];?>" > 
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                <div class="col-md-3">
                   <select name="penv_new_use_point"  class="control-label col-md-4">
                    <?php
                      $iPoint=$row_environment['penv_new_use_point'];
                      for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                              <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                     <?php } ?>
                   </select> 
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">Worth on New Product </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Worth on New Product " name="penv_ruse_new_product" value="<?php echo $row_environment['penv_ruse_new_product'];?>" > 
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                <div class="col-md-3">
                   <select name="penv_ruse_new_product_point"  class="control-label col-md-4">
                    <?php
                      $iPoint=$row_environment['penv_ruse_new_product_point'];
                      for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                              <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                     <?php } ?>
                   </select> 
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
                      
                        <!-- Start - Local product  -->
                        <div class="form-group">
                            <label class="control-label col-md-3"><strong>Local product</strong></label>
                            <div class="col-md-9">
                                <span class="help-block">&nbsp;</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Material Name </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Material Name" name="txtMaterialName" id="txtMaterialName" value="" >
                                <span class="help-block message"> Please Enter Material Name  Here</span><span class="help-block error-message"> *Required field </span>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Place of Origin/s </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Place of Origin/s " name="product_attribute_id_30" id="product_attribute_id_30" value="" >                               
                                <input type="hidden" id="hdfLocationLat" name="hdfLocationLat" value="0" >
                                <input type="hidden" id="hdfLocationLong" name="hdfLocationLong" value="0"  >
                                <span class="help-block message"> Please Enter Place of Origin/s  Here</span><span class="help-block error-message"> *Required field </span>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Distance from product of orgin to site</label>
                            <div class="col-md-1">
                                <div class="radio-list">
                                    <label>
                                    <input type="radio" name="product_attribute_id_31" value="<=400 km" <?php if($product_field_value_31=='Yes') echo 'checked';?> />
                                    <=400 km </label>
                                    <label>
                                    <input type="radio" name="product_attribute_id_31" value=">400 km" <?php if($product_field_value_31=='Yes') echo 'checked';?> />
                                    >400 km </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter Note" name="product_attribute_id_note_31" id="product_attribute_id_note_31" value="<?php echo $product_field_note_31;?>" >
                                <input type="hidden" name="product_field_id_hdn_31" id="product_field_id_hdn_31" value="<?php echo $product_field_id_hdn_31;?>" >
                                <input type="hidden" name="product_field_id_hdn_31_del" id="product_field_id_hdn_31_del" value="" >
                                <span class="help-block message"> Please Enter Note Here</span><span class="help-block error-message"> *Required field </span>
                            </div>
                            <div class="col-md-2">    
                                <a id="btnAdd" href="javascript:void(0);" class="btn green" style="height:35px;">Add Product<i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="portlet-body table-scrollable" >
                                          <table class="table table-striped table-bordered table-hover" id="sample_1">
                                              <thead>
                                                <tr>
                                                  <th width="20%" >Material Name</th>
                                                  <th width="20%" >Place of Origin/s</th>
                                                  <th width="20%" >Distance</th>
                                                  <th width="70%" >Product Note</th>
                                                  <th width="10%" >Status</th>
                                                </tr>
                                              </thead>
                                              <tbody id="inv_details_list" >
                                                  <?php
                                                  for($iRow=0;$iRow<=count($arr_product_details)-1;$iRow++)
                                                  {
                                                      ?>
                                                  <tr class="tr_inv_details" data-id="<?php echo $arr_product_details[$iRow]['product_details_id'];?>" data-product_attribute_id_31="<?php echo $arr_product_details[$iRow]['distance'];?>" data-product_attribute_id_note_31="<?php echo $arr_product_details[$iRow]['product_note'];?>" data-materialname="<?php echo $arr_product_details[$iRow]['material_name'];?>" data-place_of_origin="<?php echo $arr_product_details[$iRow]['places_of_origin'];?>" data-lat="<?php echo $arr_product_details[$iRow]['places_of_origin_lat'];?>" data-lng="<?php echo $arr_product_details[$iRow]['places_of_origin_lng'];?>"  >
                                                    <td><?php echo $arr_product_details[$iRow]['material_name'];?></td>
                                                    <td><?php echo $arr_product_details[$iRow]['places_of_origin'];?></td>
                                                    <td><?php echo $arr_product_details[$iRow]['distance'];?></td>
                                                    <td><?php echo $arr_product_details[$iRow]['product_note'];?></td>
                                                    <td>
                                                    <a href="javascript:void(0)" style="float:right;" class="btn red delete_inv_details">Delete <i class="fa fa-trash-o" ></i></a>
                                                    </td>
                                                    </tr>
                                                      <?php
                                                  }
                                                  ?>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>    
                        <!-- End - Local product  -->
                        <!-- Start - Freight Cost  -->
              <div class="clearfix"></div>
              <hr>
              <div class="form-group">
                  <label class="control-label col-md-3"><strong>Freight Cost</strong></label>
                  <div class="col-md-9">
                      <span class="help-block"> It is the cost of getting the product at the site from the place from where it will be delivrerd </span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">Cost of freight</label>
                  <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_freight_cost']=='N')
                            {
                              $radioEnv_freight_1='checked';
                              $radioEnv_freight_2='';
                              
                            }                           
                            else 
                            {
                              $radioEnv_freight_1='';                            
                              $radioEnv_freight_2='checked';
                            }
                           ?>                        
                        <input type="radio" name="penv_freight_cost" value="N" <?php echo $radioEnv_freight_1;?> />
                        I Know </label>
                        <label>
                        <input type="radio" name="penv_freight_cost" value="DN" <?php echo $radioEnv_freight_2;?> />
                        I Dont know </label> 
                    </div>
                  </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_freight_cost_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_freight_cost_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_freight_cost_note"  value="<?php echo $row_environment['penv_freight_cost_note'];?>" >                     
                </div>                    
            </div>
                        <!-- Start - Freight Cost  -->
                        <!-- Start - Embodied Energy  -->
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Embodied Energy</strong></label>
                <div class="col-md-9">
                    <span class="help-block">Embodied energy??is the total??energy??required for the extraction, processing, manufacture and delivery of building materials to the building site.</span>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-md-3">Energy needed for extraction </label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Energy needed for extraction " name="penv_extraction_energy" value="<?php echo $row_environment['penv_extraction_energy'];?>" >
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="penv_extraction_energy_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_environment['penv_extraction_energy_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group"></div>
              <div class="form-group">
                <label class="control-label col-md-3">Energy needed for processing</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Energy needed for processing" name="penv_processing_energy" value="<?php echo $row_environment['penv_processing_energy'];?>" >
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                <div class="col-md-3">
                   <select name="penv_processing_energy_point"  class="control-label col-md-4">
                    <?php
                      $iPoint=$row_environment['penv_processing_energy_point'];
                      for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                              <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                     <?php } ?>
                   </select> 
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">Energy needed for manufacturing</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Energy needed for manufacturing" name="penv_manufacturing_energy" value="<?php echo $row_environment['penv_manufacturing_energy'];?>" > 
                  </div>
                  <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="penv_manufacturing_energy_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_environment['penv_manufacturing_energy_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group"></div>
                <div class="form-group">
                    <label class="control-label col-md-3">Energy needed for delivery</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Energy needed for delivery" name="penv_delivery_energy" value="<?php echo $row_environment['penv_delivery_energy'];?>" >
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="penv_delivery_energy_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_environment['penv_delivery_energy_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
                </div>
                <div class="clearfix"></div>
               <hr>
                        <!-- End - Embodied Energy  -->
                        <!-- Start - Reduce water waste/consumption  -->
              <div class="form-group">
                  <label class="control-label col-md-3"><strong>Reduce water waste/consumption</strong></label>
                  <div class="col-md-9">
                      <span class="help-block">The technology/ product or design helps to reduce water usage or wastage</span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">How much impact in percentage</label>
                  <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="How much impact in percentage" name="penv_impact_percentage" value="<?php echo $row_environment['penv_impact_percentage'];?>" >
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="penv_impact_percentage_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_environment['penv_impact_percentage_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group"></div>
                        <!-- End - Reduce water waste/consumption  -->
                        <!-- Start - Waste Material Generation  -->
                <div class="form-group">
                    <label class="control-label col-md-3"><strong>Waste Material Generation</strong></label>
                    <div class="col-md-9">
                        <span class="help-block">Waste material that is to be generated through out the life</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">During Production</label>
                    <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_waste_material_production']=='Y')
                            {
                              $radioEnv_pro_1='checked';
                              $radioEnv_pro_2='';                              
                            }                            
                            else 
                            {
                              $radioEnv_pro_1='';                              
                              $radioEnv_pro_2='checked';
                            }

                           ?>
                        
                        <input type="radio" name="penv_waste_material_production" value="Y" <?php echo $radioEnv_pro_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="penv_waste_material_production" value="N" <?php echo $radioEnv_pro_2;?> />
                        No </label>                      
                        
                    </div>
                  </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_waste_material_production_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_waste_material_production_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_waste_material_production_note"  value="<?php echo $row_environment['penv_waste_material_production_note'];?>" >                     
                </div>                    
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">During Use</label>
                <div class="col-md-3">
            <div class="radio-list">
             <label>
                <?php if($row_environment['penv_waste_material_use']=='Y')
                  {
                    $radioEnv_use_1='checked';
                    $radioEnv_use_2='';                              
                  }                            
                  else 
                  {
                    $radioEnv_use_1='';                              
                    $radioEnv_use_2='checked';
                  }

                 ?>            
                    <input type="radio" name="penv_waste_material_use" value="Y" <?php echo $radioEnv_use_1;?> />
                    Yes </label>
                    <label>
                    <input type="radio" name="penv_waste_material_use" value="N" <?php echo $radioEnv_use_2;?> />
                    No </label>
                  </div>
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_waste_material_use_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_waste_material_use_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_waste_material_use_note"  value="<?php echo $row_environment['penv_waste_material_use_note'];?>" >                     
                </div>                    
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">End of Life</label>
                <div class="col-md-3">
                        <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_waste_material_life']=='Y')
                            {
                              $radioEnv_life_1='checked';
                              $radioEnv_life_2='';                              
                            }                            
                            else 
                            {
                              $radioEnv_life_1='';                              
                              $radioEnv_life_2='checked';
                            }

                           ?>
                        
                        <input type="radio" name="penv_waste_material_life" value="Y" <?php echo $radioEnv_life_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="penv_waste_material_life" value="N" <?php echo $radioEnv_life_2;?> />
                        No </label>                      
                        
                    </div>
                  </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_waste_material_life_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_waste_material_life_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_waste_material_life_note"  value="<?php echo $row_environment['penv_waste_material_life_note'];?>" >                     
                </div>                    
            </div>
            <div class="clearfix"></div>
            <hr>
                        <!-- End - Waste Material Generation  -->
                        <!-- Start - Adaptable design  -->
            <div class="form-group">
                <label class="control-label col-md-3"><strong>Adaptable design</strong></label>
                <div class="col-md-9">
                    <span class="help-block">Adaptable design aims at developing products that are??adaptable??in their??design??and/or their production.??Adaptability??is defined as the extension of the utility (service) of products. Two types of adaptabilities are proposed as product??adaptability??and??design adaptability.</span>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Foreseeable future</label>
                <div class="col-md-3">
                  <div class="radio-list">
                   <label>
                    <?php if($row_environment['penv_adaptable_design_foreseeable']=='Y')
                      {
                        $radioEnv_fores_1='checked';
                        $radioEnv_fores_2='';                              
                      }                            
                      else 
                      {
                        $radioEnv_fores_1='';                              
                        $radioEnv_fores_2='checked';
                      }

                     ?>
                  
                  <input type="radio" name="penv_adaptable_design_foreseeable" value="Y" <?php echo $radioEnv_fores_1;?> />
                  Yes </label>
                  <label>
                  <input type="radio" name="penv_adaptable_design_foreseeable" value="N" <?php echo $radioEnv_fores_2;?> />
                  No </label>                      
                  
                  </div>
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_adaptable_design_foreseeable_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_adaptable_design_foreseeable_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group"></div>
            <div class="form-group">
                <label class="control-label col-md-3">UnForeseeable future</label>
                <div class="col-md-3">
                  <div class="radio-list">
                        <label>
                          <?php if($row_environment['penv_adaptable_design_unforeseeable']=='Y')
                            {
                              $radioEnv_unfores_1='checked';
                              $radioEnv_unfores_2='';                              
                            }                            
                            else 
                            {
                              $radioEnv_unfores_1='';                              
                              $radioEnv_unfores_2='checked';
                            }

                           ?>
                        
                        <input type="radio" name="penv_adaptable_design_unforeseeable" value="Y" <?php echo $radioEnv_unfores_1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="penv_adaptable_design_unforeseeable" value="N" <?php echo $radioEnv_unfores_2;?> />
                        No </label>                      
                        
                    </div>
                  </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="penv_adaptable_design_unforeseeable_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_environment['penv_adaptable_design_unforeseeable_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="penv_adaptable_design_unforeseeable_note"  value="<?php echo $row_environment['penv_adaptable_design_unforeseeable_note'];?>" >                     
                </div>                    
            </div>
                        <!-- End - Adaptable design  -->
                    <!-- End - Environmental  -->
      

     </div>

      <div class="row">
            <div class="col-md-12">
              <button type="submit" id="btn_eco" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
            </div>

           
        </div>

     </form>
    </div>

     <div class="tab-pane" id="Modern">

      <form id="edit_Modern_form" enctype="multipart/form-data">  
      <div class="row">
     
          <div class="form-group">
            <label class="control-label col-md-3"><strong>New Product</strong></label>
            <div class="col-md-9">
                <span class="help-block">A completely new product /material has been created to reduce the use of non recyclable, non renewable materials or products</span>
            </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3">Replacement for which non recyclable, non renewable materials or products </label>
             <div class="col-md-3">
                    <div class="radio-list">
                        <label>
                          <?php if($row_modern['pmod_np_replacement']=='Y')
                            {
                              $radioMnp1='checked';
                              $radioMnp2='';
                            }
                            else
                            {
                              $radioMnp2='checked';
                              $radioMnp1='';
                            }

                           ?>
                        
                        <input type="radio" name="pmod_np_replacement" value="Y" <?php echo $radioMnp1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="pmod_np_replacement" value="N" <?php echo $radioMnp2;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="pmod_np_replacement_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_modern['pmod_np_replacement_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
          <div class="clearfix"></div>
          <div class="form-group">
              <label class="control-label col-md-3">Scope of price correction</label>
              <div class="col-md-3">
                    <div class="radio-list">
                        <label>
                          <?php if($row_modern['pmod_np_price_correction']=='Y')
                            {
                              $radioMprice1='checked';
                              $radioMprice2='';
                            }
                            else
                            {
                              $radioMprice2='checked';
                              $radioMprice1='';
                            }

                           ?>
                        
                        <input type="radio" name="pmod_np_price_correction" value="Y" <?php echo $radioMprice1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="pmod_np_price_correction" value="N" <?php echo $radioMprice2;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="pmod_np_price_correction_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_modern['pmod_np_price_correction_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="pmod_np_price_correction_note"  value="<?php echo $row_modern['pmod_np_price_correction_note'];?>" >                     
                </div>
                    
            </div>

            <div class="clearfix"></div>
           <hr>
          <!-- End - New Product  -->
          <!-- Start - Technology Saves Time   -->
          <div class="form-group">
              <label class="control-label col-md-3"><strong>Technology Saves Time </strong></label>
              <div class="col-md-9">
                  <span class="help-block">The  / technology may actually help you save time does reducing the overall cost (Construction technology / methodology etc)</span>
              </div>
          </div>
           <div class="clearfix"></div>
          <div class="form-group">
          <label class="control-label col-md-3">Explanation ( is the time saved considerable)</label>
           <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Explanation" name="pmod_tst_explanation" value="<?php echo $row_modern['pmod_tst_explanation'];?>" >                          
                    
                </div>
                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                <div class="col-md-3">
                   <select name="pmod_tst_explanation_point"  class="control-label col-md-4">
                    <?php
                      $iPoint=$row_modern['pmod_tst_explanation_point'];
                      for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                              <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                     <?php } ?>
                   </select> 
                </div>
            </div>
          <div class="clearfix"></div>
          <div class="form-group"></div>
          <div class="form-group">
              <label class="control-label col-md-3">Initial cost difference with tradition technology</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Initial cost difference with tradition technology" name="pmod_tst_Initial_cost" value="<?php echo $row_modern['pmod_tst_Initial_cost'];?>" >                          
                        
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="pmod_tst_Initial_cost_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_modern['pmod_tst_Initial_cost_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group"></div>
          <div class="form-group">
              <label class="control-label col-md-3">Overall Impact</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Overall Impact" name="pmod_tst_overall_impact" value="<?php echo $row_modern['pmod_tst_overall_impact'];?>" >                          
                        
                    </div>
                    <label class="control-label col-md-1">&nbsp;</label>
                    <label class="control-label col-md-1">Rating </label>
                    <div class="col-md-3">
                       <select name="pmod_tst_overall_impact_point"  class="control-label col-md-4">
                        <?php
                          $iPoint=$row_modern['pmod_tst_overall_impact_point'];
                          for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                  <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                         <?php } ?>
                       </select> 
                    </div>
          </div>
          <div class="clearfix"></div>
          <!-- End - Technology Saves Time  -->
          <!-- Start - Technology helps in Space Utility   -->
          <div class="form-group">
              <label class="control-label col-md-3"><strong>Technology helps in Space Utility </strong></label>
              <div class="col-md-9">
                  <span class="help-block">Many modern product / technology help you use a space by better utilisation thus saving on the need of space</span>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3">Multi-use</label>
              <div class="col-md-3">
                    <div class="radio-list">
                        <label>
                          <?php if($row_modern['pmod_thsu_multi_use']=='Y')
                            {
                              $radioMulti1='checked';
                              $radioMulti2='';
                            }
                            else
                            {
                              $radioMulti2='checked';
                              $radioMulti1='';
                            }

                           ?>
                        
                        <input type="radio" name="pmod_thsu_multi_use" value="Y" <?php echo $radioMulti1;?> />
                        Yes </label>
                        <label>
                        <input type="radio" name="pmod_thsu_multi_use" value="N" <?php echo $radioMulti2;?> />
                        No </label>
                        
                    </div>
                </div>

                <label class="control-label col-md-1">&nbsp;</label>
                <label class="control-label col-md-1">Rating </label>
                  <div class="col-md-3">
                     <select name="pmod_thsu_multi_use_point" class="control-label col-md-4">
                      <?php
                        $iPoint=$row_modern['pmod_thsu_multi_use_point'];
                        for ($iCount = 1; $iCount < 11; $iCount++) {   ?>
                                <option value="<?=$iCount;?>" <?php if($iCount==$iPoint){ echo 'selected'; } ?>><?=$iCount;?></option>
                       <?php } ?>
                     </select> 
                  </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-3">&nbsp;</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Note" name="pmod_thsu_multi_use_note"  value="<?php echo $row_modern['pmod_thsu_multi_use_note'];?>" >                     
                </div>
                    
            </div>
                        <!-- End - Technology helps in Space Utility  -->
                    <!-- End - Modern Advancement  -->
        
     </div>
        <div class="row">
            <div class="col-md-12">
              <button type="submit" id="btn_Modern" class="btn btn-primary">Save Data <span class="spinner-border spinner-border-sm" style="display:none;"></span></button>
            </div>

           
        </div>
      </form>
    </div>

     
      
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>


     
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('include/footer.php'); ?>

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/select2.full.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>


var editor = CKEDITOR.replace( 'cke_desc' );

// The "change" event is fired whenever a change is made in the editor.
editor.on( 'change', function( evt ) {
    

    $('#product_desc').val(evt.editor.getData());
     
});
</script>
<script>
$(window).load(function() {
        
       $("#cat_id").select2();

         if('<?=$type;?>'=='P') 
            {              
                $('.nav-tabs a[href="#ProImg"]').tab('show');
            }

    });



$("#edit_product_form").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'edit_product');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();                           
                          swal("Update !", "Data Updated Successfully.", "success");                        

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});

$("#edit_Economic_form").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'edit_Economic');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();
                           
                          swal("Update !", "Data Updated Successfully.", "success");
                          
                          //$('#tr_'+delslno).stop().slideUp(300); 

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});

$("#edit_Social_form").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'edit_Social');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();
                           
                          swal("Update !", "Data Updated Successfully.", "success");
                          
                          //$('#tr_'+delslno).stop().slideUp(300); 

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});

$("#edit_Modern_form").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'edit_Modern');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();
                           
                          swal("Update !", "Data Updated Successfully.", "success");
                          
                          //$('#tr_'+delslno).stop().slideUp(300); 

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});

$("#frm_Environmental").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'edit_Environmental');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();
                           
                          swal("Update !", "Data Updated Successfully.", "success");
                          
                          //$('#tr_'+delslno).stop().slideUp(300); 

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});


$("#frm_product_Images").submit(function(e){
  e.preventDefault();

  var newdata1 = new FormData(this);    
  newdata1.append( "action", 'add_product_img');

  newdata1.append( "product_id", '<?=$slno;?>');

  $(".spinner-border").show();

      $.ajax({

              url: "allajax.php",
              method: 'post',
              data: newdata1,
              contentType: false,
              cache: false,
              processData:false,

              success:function(result3){

                    console.log(result3);
                    if(result3>0){
                          $(".spinner-border").hide();
                           
                          //swal("Upload !", "Image Uploaded Successfully.", "success");
                           swal({
      title: "Upload", 
      text: "Image Uploaded Successfully", 
      type: "success"
     },
  function(){ 
    window.location.href='edit_product.php?id=<?=$slno;?>&tab=P';
  }
  );
                          
                          //$('#tr_'+delslno).stop().slideUp(300); 

                        }else{
                          swal("Oops!", "Something went wrong on the page!", "error");
                        }
            }
      });
});


function fnDeleteImage(delslno){

        swal({

      title: "Are you sure?",

      text: "Delete this Image!",

      type: "warning",

      showCancelButton: true,

      confirmButtonColor: "red",

      confirmButtonText: "Yes, delete it!",

      cancelButtonText: "No, cancel plz!",

      closeOnConfirm: false,

      closeOnCancel: false 

      },

      function(isConfirm) {

        if (isConfirm) {

          jQuery.ajax({

          url: "allajax.php",

          method: 'post',

          data: {
            action:'delete_img',
            id: delslno,
            
          },

          success: function(result){
            console.log(result);

            if(result == 1){
              $('#dvImg_'+delslno).remove(); 
              swal("Deleted!", "Image has been deleted.", "success");
              
            }else{
              swal("Oops!", "Something went wrong on the page!", "error");
            }
                        
            }
          });
        } else {
          swal("Cancelled", "Image is safe", "error");
        }
      }
    );
             
  }


</script>

</body>
</html>
