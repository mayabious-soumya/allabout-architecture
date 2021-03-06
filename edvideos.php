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
	SELECT * FROM `tblvideos` WHERE status = 1
	";
	$dtTmp = getDatatable($strSql);

	?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/video-banner.png" alt="inside-page">
        <h5 class="inside-page-banner-text">Expand your knowledge</h5>
    </section>



    <section class="insidepage-content-block edvideos">
        <div class="container">
            <div class="main-titel-block">
                <h2>ED <span>Videos</span></h2>
            </div>
            <div class="insidepage-description-block">
                <p>All About Architecture is an integrated community designed to share knowledge, information related to sustainable ways of building cities and facilitate people taking the future-ready decision fo the welfare of our society. Subscribe to find informative videos and share videos on your product for the ultimate reach and display.</p>
            </div>
            
            <div class="workshop-block">
                
                <!---workshop-all-box-->
                <div class="workshop-all-boxs">
                    <div class="row">
						<?php
						for($iRow=0;$iRow<=count($dtTmp)-1;$iRow++)
						{
							echo '
							<div class="col-sm-6 col-md-4">
								<a data-toggle="modal" class="edvideo_click" data-link="'.$dtTmp[$iRow]['link'].'" > 
									<div class="card workshop-box">
										<div class="workshop-image">
											<img src="images/ed-noimage.png" class="card-img-top" alt="'.$dtTmp[$iRow]['title'].'">
										</div>
										<div class="card-body">
											<h5 class="card-title">'.$dtTmp[$iRow]['title'].'</h5>
											<p class="card-text">'.$dtTmp[$iRow]['description'].'</p>
										</div>
									</div>
								</a> 
							</div>
							';
						}
						?>
                    </div>
                </div>
                <!---workshop-all-box-->
            </div>

                                    <!-----video-popup---->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <iframe class="embed-responsive-item" id="modIframe" src="https://www.youtube.com/embed/EI-AxklgY-0"
            allowfullscreen></iframe>
			
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>


                        <!-----video-popup---[end]--->

            







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



<script type="text/javascript">
    $('#modal1').on('hidden.bs.modal', function (e) {
	  // do something...
	  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
	});

	$('#modal6').on('hidden.bs.modal', function (e) {
	  // do something...
	  $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
	});

	$('#modal4').on('hidden.bs.modal', function (e) {
	  // do something...
	  $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
	});

	jQuery(document).on('click','.edvideo_click',function(){
		console.log(jQuery(this).data('link'));
		jQuery('#modIframe').attr('src',jQuery(this).data('link'));
		jQuery('#modal4').modal('show');
	});

</script>


   
    </script>
  </body>
</html>
