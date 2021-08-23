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
     
    <?php include("include/header.php");?> 

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/contact-us-banner.png" alt="inside-page">
        <h5 class="inside-page-banner-text">Write to us</h5>
    </section>


    <section class="insidepage-content-block contactus-main-block">
        <div class="container">
            <div class="main-titel-block">
                <h2><span>Contact Us</span></h2>
            </div>
            

            
            <div class="contact-block">


              <div class="row justify-content-center">
                 <div class="col-md-12">
                    <div class="wrapper">


                       <div class="row no-gutters mb-5">
                          <div class="col-md-5 d-flex align-items-stretch">
                             <div class="map-block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1303.6602153252536!2d88.38573485891045!3d22.455060470264367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027197471e867f%3A0x8a68eb2bbaf7e923!2s98%2C%20Netaji%20Subhash%20Chandra%20Bose%20Rd%2C%20Mahamaya%20Tala%2C%20Garia%2C%20Kolkata%2C%20West%20Bengal%20700084!5e0!3m2!1sen!2sin!4v1628013047855!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                             </div>
                          </div>

                          <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">

                               <div class="contact-form-box">
                                  <div class="contact-header">
                                    <h3 class="titel">Get In Touch</h3>
                                    <div class="contact-social-block">
                                      <ul>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <p>If you have any query, or need any information to build Sustainable Cities, you can feel free to contact us. We’ll get back to you as early as possible.</p>


                                  <div class="form-message-warning" style="display: none;">
                                    Error Massage
                                  </div>
                                  <div class="form-message-success" style="display: none;">
                                     Your message was sent, thank you!
                                  </div>
                                  <form class="contactForm">
                                     <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label class="label" for="name">Full Name</label>
                                              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label class="label" for="email">Email Address</label>
                                              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                           </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="form-group">
                                              <label class="label" for="subject">Subject</label>
                                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                           </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="form-group">
                                              <label class="label" for="#">Message</label>
                                              <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                           </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="form-group">
                                              <input type="submit" value="Send Message" class="btn btn-primary">
                                              <div class="submitting"></div>
                                           </div>
                                        </div>
                                     </div>
                                  </form>
                               </div>
                             </div>


                          </div>
                          
                       </div>



                       <div class="row">

                          <!--
                          <div class="col-sm-4">
                             <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                   <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                   <p><span>Address:</span> 98, D, N.S.C Bose Road, Kolkata</p>
                                </div>
                             </div>
                          </div>-->


                          <div class="col-sm-6">
                            <a href="https://wa.me/9007159440" target="_blank" title="click to open whatsapp chat">
                             <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                   <span class="fab fa-whatsapp"></span>
                                </div>
                                <div class="text">
                                   <p><span>WhatsApp:</span> <a href="tel:9007159440">+ 91-9007159440</a></p>
                                </div>
                             </div>
                           </a>
                          </div>

                          <div class="col-sm-6">
                             <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                   <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                   <p><span>Email:</span> <a href="mailto:admin@allaboutarchitecture.in">admin@allaboutarchitecture.in</a></p>
                                </div>
                             </div>
                          </div>


                       </div>
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
