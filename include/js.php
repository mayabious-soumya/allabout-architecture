<?php
	$strSql = "select * from category where cat_level = 2";
	$dtTmp = getDatatable($strSql);
	
	

?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="js/jquery-3.2.1.slim.min.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

  <script type="text/javascript">
  
	var arrCategory = [
		<?php
		$strComma = '';
		for($iRow=0;$iRow<=count($dtTmp)-1;$iRow++)
		{
			echo $strComma.'{"id":"'.$dtTmp[$iRow]['id'].'","cat_name":"'.$dtTmp[$iRow]['cat_name'].'","cat_parent_id":"'.$dtTmp[$iRow]['cat_parent_id'].'"}';
			$strComma = ',';
		}
		?>
	];
  
    $("#registration-button").click(function () {
        $("#Login").css("display","none")
        $("#Registration").css("display","block")  
    });
    $("#login-button").click(function () {
        $("#Registration").css("display","none")
        $("#Login").css("display","block")  
    });
  </script>

  <script type="text/javascript">
      $("#sidebar-toggle-menu").click(function(){
      $("body").toggleClass("sidebar-open");
    });
	
	/*jQuery(document).ready(function(){
		jQuery("#modCalculator").modal("show");
	});*/
	
	function calculator()
	{
		var strQuantityRequired = '';
		var iCategoryID = 0;
		var strUnitPrice = '';
		//var cboRoomTypeParameters = '';
		
		if(jQuery.trim(jQuery('#cboRoomType').val())=='')
		{
			alert('Please Select Room Type');
			jQuery('#cboRoomType').focus();
			return false;
		}
		
		/*** START - Quantity Required ***/
		if(jQuery.trim(jQuery('#txtRoomLength').val())=='')
		{
			alert('Please Enter Length');
			jQuery('#txtRoomLength').focus();
			return false;
		}
		else if(jQuery.trim(jQuery('#txtRoomBreadth').val())=='')
		{
			alert('Please Enter Breadth');
			jQuery('#txtRoomBreadth').focus();
			return false;
		}
		 
		if(jQuery.trim(jQuery('#cboRoomTypeParameters').val())=='')
		{
			alert('Please Select Room Type Parameters');
			jQuery('#cboRoomTypeParameters').focus();
			return false;
		}
		
		if(jQuery.trim(jQuery('#txtMaterialLength').val())=='')
		{
			alert('Please Enter Material Length');
			jQuery('#txtMaterialLength').focus();
			return false;
		}
		else if(jQuery.trim(jQuery('#txtMaterialBreadth').val())=='')
		{
			alert('Please Enter Material Breadth');
			jQuery('#txtMaterialBreadth').focus();
			return false;
		}
		
		strQuantityRequired = Math.round(parseFloat(jQuery('#txtRoomLength').val())*parseFloat(jQuery('#txtRoomBreadth').val())/parseFloat(jQuery('#txtMaterialLength').val())*parseFloat(jQuery('#txtMaterialBreadth').val()));
		jQuery('#txtQuantityRequired').val(strQuantityRequired);
		
		/*** END - Quantity Required ***/
		
		/*** START - Unit Price ***/
		/*
		cboRoomTypeParameters = jQuery('#cboRoomTypeParameters').val();
		
		for(iRow=0;iRow<=arrCategory.length-1;iRow++)
		{
			if(parseInt(arrCategory[iRow]['cat_parent_id'])==parseInt(cboRoomTypeParameters))
			{
				iCategoryID = parseInt(arrCategory[iRow]['id'];
			}
		}
		*/
		
		iCategoryID = jQuery('#cboMaterial').val();
		
		if(iCategoryID=='0')
		{
			alert('Please Select Room Type Parameters');
			jQuery('#cboMaterial').focus();
			return false;
		}
		else
		{
			if(iCategoryID==2) // Ceramic Tiles
			{
				strUnitPrice = 25;
			}
			else if(iCategoryID==3) // Terracotta Tiles
			{
				strUnitPrice = 40;
			}
			else if(iCategoryID==6) // Marble Tiles
			{
				strUnitPrice = 50;
			}
			else if(iCategoryID==9) // Floor Mat
			{
				strUnitPrice = 10;
			}
			else if(iCategoryID==10) // Floor Carpet
			{
				strUnitPrice = 20;
			}
			else if(iCategoryID==11) // Paint
			{
				strUnitPrice = 10;
			}
			else if(iCategoryID==12) // Tiles
			{
				strUnitPrice = 20;
			}
			else if(iCategoryID==13) // Wall Panelling
			{
				strUnitPrice = 15;
			}
			else if(iCategoryID==14) // Paint
			{
				strUnitPrice = 10;
			}
			else if(iCategoryID==15) // False Ceiling
			{
				strUnitPrice = 30;
			}
			else if(iCategoryID==16) // Wood
			{
				strUnitPrice = 50;
			}
			else if(iCategoryID==17) // Plywood
			{
				strUnitPrice = 20;
			}
			else if(iCategoryID==18) // Fiber
			{
				strUnitPrice = 40;
			}
			else if(iCategoryID==19) // Wooden Panel
			{
				strUnitPrice = 50;
			}
			else if(iCategoryID==20) // Sheet Metal Panel
			{
				strUnitPrice = 30;
			}
			else if(iCategoryID==21) // Glass Panel
			{
				strUnitPrice = 40;
			}
			else if(iCategoryID==22) // Sliding Fiber Panel
			{
				strUnitPrice = 35;
			}
			jQuery('#txtUnitPrice').val(strUnitPrice);
		}
		/*** END - Unit Price ***/
		
		/*** START - Total Cost ***/
		jQuery('#txtTotalCost').val(parseInt(strQuantityRequired)*parseInt(strUnitPrice));
		/*** END - Total Cost ***/
		
	}
	
	function loadMaterial()
	{
		var cboRoomTypeParameters = jQuery('#cboRoomTypeParameters').val();
		
		var strDesign = '<option value="0">Select Material</option>';
		
		for(iRow=0;iRow<=arrCategory.length-1;iRow++)
		{
			if(parseInt(arrCategory[iRow]['cat_parent_id'])==parseInt(cboRoomTypeParameters))
			{
				strDesign += '<option value="'+arrCategory[iRow]['id']+'">'+arrCategory[iRow]['cat_name']+'</option>';
			}
		}
		
		jQuery('#cboMaterial').html(strDesign);
	}
	
  </script>



  