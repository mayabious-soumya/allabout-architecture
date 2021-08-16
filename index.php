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
	where str_to_date(date_format(`datetime`,'%d/%m/%Y'),'%d/%m/%Y') >= 
	str_to_date(date_format(addtime(utc_timestamp(),'05:30:00'),'%d/%m/%Y'),'%d/%m/%Y')
	and featured = 1
	order by `datetime`
  ";
  $dtWorkShop = getDatatable($strSql);
  
  
  $strSql = "
	select product_id, product_name, product_picture
	from tblproduct
	where product_status = 'A'
	order by product_name
  ";
  $dtRecentProduct = getDatatable($strSql);
  
  $strSql = "
	select product_id, product_name, product_picture
	from tblproduct
	where product_status = 'A'
	order by product_viewed desc
  ";
  $dtMostViewed = getDatatable($strSql);
  
  $strSql = "
	select tm_name, tm_designation, tm_desc, tm_image
	from tbltestimonials
	where tm_status = '1'
	order by tm_name
  ";
  $dtTestimonial = getDatatable($strSql);
  
  ?> 

        <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="youtub-video-banner">
              <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/56Fzqq5vyrM?controls=1&autoplay=1&mute=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>

          <div class="carousel-item">
            <img class="img-fluid" src="images/banner1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h5>Contrary to <span>popular</span></h5>
                <p>Branding &nbsp;  / &nbsp;  design &nbsp;  /  &nbsp; devlopment</p>
                <a href="#">Know More</a>
              </div>
          </div>
          <div class="carousel-item blackbg">
            <img class="img-fluid" src="images/banner2.jpg" alt="Second slide">
            <div class="carousel-caption">
                <h5>Contrary to <span>popular</span></h5>
                <p>Branding &nbsp;  / &nbsp;  design &nbsp;  /  &nbsp; devlopment</p>
                <a href="#">Know More</a>
              </div>
          </div>
          <div class="carousel-item blackbg">
            <img class="img-fluid" src="images/banner1.jpg" alt="Third slide">
            <div class="carousel-caption">
                <h5>Contrary to <span>popular</span></h5>
                <p>Branding &nbsp;  / &nbsp;  design &nbsp;  /  &nbsp; devlopment</p>
                <a href="#">Know More</a>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <section class="home-wrap1 whatwedo-main-block">
        <div class="container">

          <div class="main-header">
            <div class="header-text">
              <h2>What <span>We Do?</span></h2>
              <hr>
            </div>
          </div>
          <div class="home-whatwedo-block">
            <div class="row">

              <div class="col-sm-6">
                <div class="whatwedo-box">
                  <div class="whatwedo-image-block">
                    <img src="images/whatwedo1.png" alt="whatwedo">
                  </div>
                  <div class="whatwedo-text-block">
                    <h4 class="header">GIVE A COLLABORATIVE PLATFORM</h4>
                    <p>Sustainability in the Construction Industry is still at a nascent stage- And Individuals are working to make a difference. This platform will help you to take your voice to a wider community. Together we can make a stronger difference.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="whatwedo-box">
                  <div class="whatwedo-image-block">
                    <img src="images/whatwedo2.png" alt="whatwedo">
                  </div>
                  <div class="whatwedo-text-block">
                    <h4 class="header">SAVE TIME ON RESEARCH</h4>
                    <p>Every time you design, we help you choose the most optimum product for your design. You design and we do the research for you.</p>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="col-sm-6">
                <div class="whatwedo-box">
                  <div class="whatwedo-image-block">
                    <img src="images/whatwedo3.png" alt="whatwedo">
                  </div>
                  <div class="whatwedo-text-block">
                    <h4 class="header">INTRODUCE NEW IDEAS</h4>
                    <p>Circular Economy, Carbon Foot Print Design thinking are few of the things among many that will help you and Your Business Move toward saving cost at the same time move toward building sustainable communities.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="whatwedo-box">
                  <div class="whatwedo-image-block">
                    <img src="images/whatwedo4.png" alt="whatwedo">
                  </div>
                  <div class="whatwedo-text-block">
                    <h4 class="header">INSPIRE TO RETHINK</h4>
                    <p>You can collaborate with us and spread information about your product/design principle and spread across your information to a wide audience thus increasing the awareness of your product and increasing its demand.</p>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <!---
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/infographics.jpg" class="img-fluid home-wrap1-pic1">
                </div>
                <div class="col-sm-8">
                    <h2>What <span>We Do?</span></h2>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 text-wrap1">
                            <h3>Give a Collaborative Platform</h3>
                            <p>Sustainability in the construction Industry is still at a nascent stage- And Individuals are working to make a difference. This platform will help you to take your voice to a wider community. Together we can make a stronger difference</p>
                            <img src="images/blub-icon.png">
                        </div>
                        <div class="col-sm-6 text-wrap1">
                            <h3>Save Time on Research</h3>
                            <p>Every time youdesign, we help you choose the most optimum product for your design. You design and we do the research for you.</p>
                            <img src="images/chaka-icon.png">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 text-wrap1">
                            <h3>Introduce new Ideas</h3>
                            <p>Circular Economy, Carbon Foot Print Design thinking are few of the things among many that will help you and Your Business Move toward saving cost at the same time move toward building sustainable communities.</p>
                            <img src="images/laptop-icon.png">
                        </div>
                        <div class="col-sm-6 text-wrap1">
                            <h3>Inspire to rethink</h3>
                            <p>You can collaborate with us and spread information about your product / design principle and spread across your information to a wide audience thus increasing the awareness of your product and increasing its demand.</p>
                            <img src="images/peper-icon.png">
                        </div>
                    </div>
                </div>
            </div>
          --->


        </div>
      </section>

      <!-----Why we do---->

      <section class="ourteam">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Why <span>We Do</span></h2>
                </div>
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
        <div class="howwedo-button-block"> 
            <a href="faq.php" class="howwedo-button">How We Do</a>
        </div>     
      </section>

      <!-----Why we do---end--->

      <section class="home-workshop">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <h2>Work <span>shops</span></h2>
					<?php
					for($iRow=0;$iRow<=count($dtWorkShop)-1;$iRow++)
					{
						echo '
						<div class="blog1">
							<div>
								<h3>'.$dtWorkShop[$iRow]['workshop_day'].' <span>'.$dtWorkShop[$iRow]['workshop_month'].'</span></h3>
							</div>
							<div>
								<h4><a href="workshop-details.php?slno='.$dtWorkShop[$iRow]['slno'].'" >'.$dtWorkShop[$iRow]['name'].'</a><span>'.$dtWorkShop[$iRow]['author'].'</span></h4>
							</div>
							<div>
								<p>'.$dtWorkShop[$iRow]['sdescription'].'</p>
							</div>
						</div>
						';		
					}
					?>
                </div>
            </div>
        </div>    
      </section>

      <section class="home-recent-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Expert services</h4>
                    <h3>Recent <br><span>Products</span></h3>
                    <button class="customPreviousBtn"><img src="images/prev.png"></button>
                    <button class="customNextBtn"><img src="images/next.png"></button>
                    
                </div> 
            </div>
        </div>
        <div class="recentslider-wrap">
        <div class="owl-carousel owl-carousel-1">
			<?php
			for($iRow=0;$iRow<=count($dtRecentProduct)-1;$iRow++)
			{
				echo '
				<div>
					<img src="images/recent-product1.jpg" class="img-fluid">
					<h3>'.$dtRecentProduct[$iRow]['product_name'].'</h3>
				</div>
				';	
			}
			?>
          </div>
        </div>        
      </section>

      <section class="home-recent-product home-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!--<h4>Expert services</h4>-->
                    <h3>Recent <br><span>Blog</span></h3>
                    <button class="customPreviousBtn"><img src="images/prev.png"></button>
                    <button class="customNextBtn"><img src="images/next.png"></button>
                    
                </div> 
            </div>
        </div>
        <div class="recentslider-wrap">
        <div class="owl-carousel blog-carousel">
            <a href="#">
              <div class="blog-item">      
                    <img src="images/recent-product1.jpg" class="img-fluid">
                    <div class="blog-details">
                      <h3>Sustainable Development Goals of UN and its relevance for designing Cities of the future – The India Story</h3>
                      <p>
                        The concept of sustainable development appeared in 1987 for the first
                      </p>
                    </div>
                  
              </div>
            </a>
            <a href="#">
              <div class="blog-item">      
                    <img src="images/recent-product2.jpg" class="img-fluid">
                    <div class="blog-details">
                      <h3>Sustainable Development Goals of UN and its relevance for designing Cities of the future – The India Story</h3>
                      <p>
                        The concept of sustainable development appeared in 1987 for the first
                      </p>
                    </div>
                  
              </div>
            </a>
            <a href="#">
              <div class="blog-item">      
                    <img src="images/recent-product3.jpg" class="img-fluid">
                    <div class="blog-details">
                      <h3>Sustainable Development Goals of UN and its relevance for designing Cities of the future – The India Story</h3>
                      <p>
                        The concept of sustainable development appeared in 1987 for the first
                      </p>
                    </div>
                  
              </div>
            </a>
            <a href="#">
              <div class="blog-item">      
                    <img src="images/recent-product4.jpg" class="img-fluid">
                    <div class="blog-details">
                      <h3>Sustainable Development Goals of UN and its relevance for designing Cities of the future – The India Story</h3>
                      <p>
                        The concept of sustainable development appeared in 1987 for the first
                      </p>
                    </div>
                  
              </div>
            </a>

            <a href="#">
              <div class="blog-item">      
                    <img src="images/recent-product5.jpg" class="img-fluid">
                    <div class="blog-details">
                      <h3>Sustainable Development Goals of UN and its relevance for designing Cities of the future – The India Story</h3>
                      <p>
                        The concept of sustainable development appeared in 1987 for the first
                      </p>
                    </div>
                  
              </div>
            </a>

          </div>
        </div>        
      </section>

      

      <section class="ceowrap">
          <div class="box1">
              <h2>From the<br><span>Desk of ceo</span></h2>
              <hr>
              <div class="clearfix"></div>
              <p>Life Is but a fleeting dream <br>
              In the continuum of time<br>
              We may be here today gone tomorrow<br>
              But our legacy lives along...</p>
                <a href="desk-of-ceo.php">Know More</a>
          </div>
          <div class="box2">
              <img src="images/from-desk.jpg" class="img-fluid">
          </div>
      </section>
      <section class="ceowrap">
        <div class="box2">
            <img src="images/nsrcel-main-logo.png" class="img-fluid">
        </div>
        <div class="box3">
            <h2>Who <span>are We</span></h2>
            <hr>
            <div class="clearfix"></div>
            <p>We at All About Architecture are a community dedicated to accelerate the growth of Sustainable Indian cities and Communities...</p>
            <a href="about-company.php">Know More</a>
        </div>
    </section>


    <section class="home-recent-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Expert services</h4>
                    <h3>Most viewed <br><span>Products</span></h3>
                    <button class="customPreviousBtn"><img src="images/prev.png"></button>
                    <button class="customNextBtn"><img src="images/next.png"></button>
                </div> 
            </div>
        </div>  
        <div class="recentslider-wrap">
        <div class="owl-carousel owl-carousel-2">
			<?php
			for($iRow=0;$iRow<=count($dtMostViewed)-1;$iRow++)
			{
				echo '
				<div>
					<img src="images/mostviewed1.jpg" class="img-fluid">
					<h3>'.$dtMostViewed[$iRow]['product_name'].'</h3>
				</div>
				';
			}
			
			?>
        </div>   
      </section>

      <section class="quick-contact ">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Contact With Us</h2>
                    <h3>Get in touch with us and work together</h3>
                </div>
                <div class="col-sm-4">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modalLoginForm">Click here to Collaborate</a>
                </div>
            </div>
        </div>        
      </section>

      

      <section class="testimonial-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="titel"><span>Collaborator</span></h2>
                </div>

                <div class="col-sm-12">
                    <div class="owl-carousel owl-carousel-3">
						<?php
						for($iRow=0;$iRow<=count($dtTestimonial)-1;$iRow++)
						{
							echo '
							<div>
								<div class="row">
									<div class="col-sm-7">
										<i class="fas fa-quote-left"></i>
										<p>'.$dtTestimonial[$iRow]['tm_desc'].'</p>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-4">
										<h2>'.$dtTestimonial[$iRow]['tm_name'].'</h2>
										<h3>'.$dtTestimonial[$iRow]['tm_designation'].'</h3>
										<img src="admin/testimonials/'.$dtTestimonial[$iRow]['tm_image'].'">
									</div>
								</div>
							</div>
							';
						}
						?>
                </div>
            </div>
        </div>        
      </section>
      
      <?php include("include/footer.php");?> 

	  <?php include("include/js.php");?>

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
    <script>
      $('.owl-carousel-1').owlCarousel({
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


$('.owl-carousel-2').owlCarousel({
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

$('.blog-carousel').owlCarousel({
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


$('.owl-carousel-3').owlCarousel({
    loop:true,
    margin:25,
    responsiveClass:true,
    nav:true,
    dots:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
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

    <script type="text/javascript">
      $(document).ready(function(){
        //Event for pushed the video
        $('#carouselExampleIndicators').carousel({
            pause: true,
            interval: false
        });
    });
    </script>
  </body>
</html>
