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


    <section class="insidepage-content-block desk-of-ceo-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>From the <span>Desk of ceo</span></h2>
            </div>
            

            <div class="desk-of-ceo">
              <div class="row">
                <div class="col-sm-6">
                  <div class="ceo-image">
                    <img src="images/from-desk.jpg" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="ceo-text">
                    <p>
                      Life Is but a fleeting dream <br>
                      In the continuum of time<br>
                      We may be here today gone tomorrow <br>
                      But our legacy lives along<br><br>

                      The flutter we make In time and space<br>
                      Leaves behind its trail long after we are gone<br>
                      Long after we have said our goodbyes<br><br>

                      From earth we make <br>
                      To earth we go <br>
                      And yet at times we disrupt the cycle <br>
                      For our inadequate knowledge or temporary ego<br><br>

                      The former can be amended<br>
                      The later a choice<br>
                      And the choices we make<br>
                      Shapes the " Tomorrow"<br>


                    </p>
                  </div>
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
