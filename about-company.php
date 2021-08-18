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
        <img class="img-fluid" src="images/about-company-banner.png" alt="inside-page">
        <h5 class="inside-page-banner-text">Our World</h5>
    </section>


    <section class="insidepage-content-block about-company-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>Who <span>are We</span></h2>
            </div>
            

            <div class="about-company">
              
              <p>
              We at All About Architecture are a community dedicated to accelerate the growth of Sustainable Indian cities and Communities. As designers,  builders, developers, manufacturers, and professionals working on designing the Skylines of tomorrow -You can join us in this journey to make a difference.We aim to reimagine the building blocks of urban living, our focus is to meet the ‘SDG -4,11 12’. </p>

              <div class="about-three-images">
                <div class="row">
                  <div class="col-sm-4">
                    <img src="images/sdg4.png" class="img-fluid">
                  </div>
                  <div class="col-sm-4">
                    <img src="images/sdg11.png" class="img-fluid">
                  </div>
                  <div class="col-sm-4">
                    <img src="images/sdg12.png" class="img-fluid">
                  </div>
                </div>
              </div>


              <p><b>We are Incubated at IIMB and NSRCEL.</b></p>

              <div class="logo-image-block">
               <img src="images/nsrcel-main-logo-transprant.png" class="img-fluid">
              </div>
              
               <p>
              We will help you Understand the Economical , Social , Environmental Impacts of your choices of the products you choose to work with, while our Green Credits will help you take baby steps towards the better Choices. </p>

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
