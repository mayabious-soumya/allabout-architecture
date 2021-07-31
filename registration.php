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


    <section class="insidepage-content-block registration-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>New Registration</h2>
            </div>

            

            <!----registration--->

            <div class="registration-form">

              <div class="card">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-6">

                      
                        
                        <form>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="firstName">First name</label>
                              <input type="text" class="form-control" id="firstName" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="lastName">Last name</label>
                              <input type="text" class="form-control" id="lastName" placeholder="Last name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                          </div>

                          <div class="form-group">
                            <label for="userEmail">Email ID</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="name@example.com">
                          </div>
                          <div class="form-group">
                            <label for="usertype">User Type</label>
                            <select class="form-control" id="usertype">
                              <option>Manufacture</option>
                              <option>Professional</option>
                              <option>Student</option>
                            </select>
                          </div>
                          <div class="submit-block">
                              <!--<button type="submit" class="btn btn-primary">Next</button>-->
                              <a href="registration-plan-choose.php" class="btn btn-primary">Next</a>
                          </div>
                        </form>

                      


                    </div>
                    <div class="col-sm-6">
                      <div class="registration-image-box">
                        <img src="images/registration.jpeg" alt="registration">
                      </div>
                    </div>
                  </div>

                </div>
              </div> 

            </div>
            
            <!-----registration--end--->




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
