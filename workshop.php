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
		select slno, date_format(`datetime`,'%d') workshop_day, date_format(`datetime`,'%M') workshop_month,
		wdate, wtime, name, sdescription, ldescription, author, timage, bimage, featured
		from tblworkshop 
		where str_to_date(date_format(`datetime`,'%d/%m/%Y'),'%d/%m/%Y') >
		str_to_date(date_format(addtime(utc_timestamp(),'05:30:00'),'%d/%m/%Y'),'%d/%m/%Y')
		and featured = 1
		order by `datetime`
	  ";
	  $dtWorkShopUpcoming = getDatatable($strSql);
	  
	  $strSql = "
		select slno, date_format(`datetime`,'%d') workshop_day, date_format(`datetime`,'%M') workshop_month,
		wdate, wtime, name, sdescription, ldescription, author, timage, bimage, featured
		from tblworkshop 
		where str_to_date(date_format(`datetime`,'%d/%m/%Y'),'%d/%m/%Y') =
		str_to_date(date_format(addtime(utc_timestamp(),'05:30:00'),'%d/%m/%Y'),'%d/%m/%Y')
		and featured = 1
		order by `datetime`
	  ";
	  $dtWorkShopToday = getDatatable($strSql);
	  
	  $strSql = "
		select slno, date_format(`datetime`,'%d') workshop_day, date_format(`datetime`,'%M') workshop_month,
		wdate, wtime, name, sdescription, ldescription, author, timage, bimage, featured
		from tblworkshop 
		where str_to_date(date_format(`datetime`,'%d/%m/%Y'),'%d/%m/%Y') <
		str_to_date(date_format(addtime(utc_timestamp(),'05:30:00'),'%d/%m/%Y'),'%d/%m/%Y')
		and featured = 1
		order by `datetime`
	  ";
	  $dtWorkShopPast = getDatatable($strSql);
	
	?> 

	<section class="inside-page-banner">
        <img class="img-fluid" src="images/workshop-banner.png" alt="inside-page">
        <h5 class="inside-page-banner-text">Get more exposure</h5>
    </section>
    

    <section class="insidepage-content-block workshop-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>Work <span>shops</span></h2>
            </div>
            <div class="insidepage-description-block">
            	<p>Our aim is to encourage and inspire people to make sustainable development for a greater socio-economic and environmental impact. The interactive and informative workshops are designed to build skills as well as interests and offer green credits as a reward. Join the community to redefine your approach and thinking towards sustainable development.</p>
            </div>

            <div class="workshop-block">
                <div class="workshop-header-menu-block">
                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#upcomingWorkshops" class="active show">
                                Upcoming Workshops
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#todaysWorkshop">Todays Workshop</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#pastWorkshops">Past Workshops</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="upcomingWorkshops" class="tab-pane fade in active show">

                        <!---workshop-all-box-->
                        <div class="workshop-all-boxs">
                            <div class="row">
								<?php
								for($iRow=0;$iRow<=count($dtWorkShopUpcoming)-1;$iRow++)
								{
									echo '
									<div class="col-sm-6 col-md-4">   
										<div class="card workshop-box">
											<div class="workshop-image">
												<img src="admin/workshop_image/'.$dtWorkShopUpcoming[$iRow]['timage'].'" class="card-img-top" alt="'.$dtWorkShopUpcoming[$iRow]['name'].'">
											</div>
											<div class="card-body">
												<h5 class="card-title">'.$dtWorkShopUpcoming[$iRow]['name'].'</h5>
												<p class="card-text">'.$dtWorkShopUpcoming[$iRow]['sdescription'].'</p>
												<a href="workshop-details.php?slno='.$dtWorkShopUpcoming[$iRow]['slno'].'" class="btn btn-primary">Know More</a>
											</div>
										</div>
									</div>
									';
								}
								
								if(count($dtWorkShopUpcoming)==0)
								{
									echo '
									<div class="col-sm-12 col-md-12">   
										<div class="card workshop-box">
											<div class="card-body">
												<h5 class="card-title">No records found</h5>
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

                    <div id="todaysWorkshop" class="tab-pane fade">
                        
                        <!---workshop-all-box-->
                        <div class="workshop-all-boxs">
                            <div class="row">
								<?php
								for($iRow=0;$iRow<=count($dtWorkShopToday)-1;$iRow++)
								{
									echo '
									<div class="col-sm-6 col-md-4">   
										<div class="card workshop-box">
											<div class="workshop-image">
												<img src="admin/workshop_image/'.$dtWorkShopToday[$iRow]['timage'].'" class="card-img-top" alt="'.$dtWorkShopToday[$iRow]['name'].'">
											</div>
											<div class="card-body">
												<h5 class="card-title">'.$dtWorkShopToday[$iRow]['name'].'</h5>
												<p class="card-text">'.$dtWorkShopToday[$iRow]['sdescription'].'</p>
												<a href="workshop-details.php?slno='.$dtWorkShopToday[$iRow]['slno'].'" class="btn btn-primary">Know More</a>
											</div>
										</div>
									</div>
									';
								}
								if(count($dtWorkShopToday)==0)
								{
									echo '
									<div class="col-sm-12 col-md-12">   
										<div class="card workshop-box">
											<div class="card-body">
												<h5 class="card-title">No records found</h5>
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

                    <div id="pastWorkshops" class="tab-pane fade">
                        
                        <!---workshop-all-box-->
                        <div class="workshop-all-boxs">
                            <div class="row">
								<?php
								for($iRow=0;$iRow<=count($dtWorkShopPast)-1;$iRow++)
								{
									echo '
									<div class="col-sm-6 col-md-4">   
										<div class="card workshop-box">
											<div class="workshop-image">
												<img src="admin/workshop_image/'.$dtWorkShopPast[$iRow]['timage'].'" class="card-img-top" alt="'.$dtWorkShopPast[$iRow]['name'].'">
											</div>
											<div class="card-body">
												<h5 class="card-title">'.$dtWorkShopPast[$iRow]['name'].'</h5>
												<p class="card-text">'.$dtWorkShopPast[$iRow]['sdescription'].'</p>
												<a href="workshop-details.php?slno='.$dtWorkShopPast[$iRow]['slno'].'" class="btn btn-primary">Know More</a>
											</div>
										</div>
									</div>
									';
								}
								if(count($dtWorkShopPast)==0)
								{
									echo '
									<div class="col-sm-12 col-md-12">   
										<div class="card workshop-box">
											<div class="card-body">
												<h5 class="card-title">No records found</h5>
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
