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
        <div class="owl-carousel owl-theme owl-carousel-banner">
            <div class="item blackbg">
                <img class="img-fluid" src="images/inside-page-banner-1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h5>Contrary to <span>popular</span></h5>
                </div>
            </div>

            <div class="item blackbg">
                <img class="img-fluid" src="images/inside-page-banner-2.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h5>Contrary to <span>popular</span></h5>
                </div>
            </div>
        </div>
    </section>


    <section class="insidepage-content-block">
        <div class="container">
            <div class="main-titel-block">
                <h2>Work shops <span>Name</span></h2>
            </div>


            <div class="workshop-details-block">

                <div class="details-top-block">
                    <div class="details-image-block">
                        <img src="images/from-desk-2.jpg" alt="details">
                    </div>
                    <div class="details-info">
                        <ul class="details-info-list">
                            <li>
                                <span class="icon">Date :</span>
                                <span class="info-text">DD/MM/YYYY</span>
                            </li>
                            <li>
                                <span class="icon">Time :</span>
                                <span class="info-text">HH:MM</span>
                            </li>
                            <li>
                                <span class="icon">Location :</span>
                                <span class="info-text">Demo location name</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary">Collaborate</a>
                    </div>

                    
                </div>

                <div class="workshop-details-text-block">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>

                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>

                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.<br><br> 

                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </p>
                    <div class="button-block">
                        <a href="#" class="btn btn-primary">Collaborate</a>
                    </div>
                </div>


            </div>

            







        </div>
    </section>


    <section class="workshop-details-slider-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Some Photos of</h4>
                    <h3>Full Name <br><span>Workshop</span></h3>
                    <button class="customPreviousBtn"><img src="images/prev.png"></button>
                    <button class="customNextBtn"><img src="images/next.png"></button>
                    
                </div> 
            </div>
        </div>
        <div class="recentslider-wrap">
        <div class="owl-carousel workshop-details-slider">
            <div>
                <img src="images/recent-product1.jpg" class="img-fluid">
                <h3>Product Name 1</h3>
            </div>
            <div>
                <img src="images/recent-product2.jpg" class="img-fluid">
                <h3>Product Name 2</h3>
            </div>
            <div>
                <img src="images/recent-product3.jpg" class="img-fluid">
                <h3>Product Name 3</h3>
            </div>
            <div>
                <img src="images/recent-product4.jpg" class="img-fluid">
                <h3>Product Name 4</h3>
            </div>

            <div>
                <img src="images/recent-product5.jpg" class="img-fluid">
                <h3>Product Name 1</h3>
            </div>
          </div>
        </div>        
      </section>



      
    <?php include("include/footer.php");?> 

	<?php include("include/js.php");?>


    <script type="text/javascript">
        var owl = $('.owl-carousel-banner');
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

    <script>
      $('.workshop-details-slider').owlCarousel({
            loop:true,
            margin:25,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })

    </script>

    <script>
        $(document).ready(function(){
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items: 1,
  });
  
  // Custom Button
  $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
  });
  $('.customPreviousBtn').click(function() {
    owl.trigger('prev.owl.carousel');
  });
  
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
   
    </script>
  </body>
</html>
