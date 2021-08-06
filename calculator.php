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


    <section class="calculator-main-block">
        <div class="container">
          <!--
            <div class="main-titel-block">
                <h2><span>Calculator</span></h2>
            </div>
            --->

            <div class="calculator-block">
              
              <!-----calculator---->

              <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="calculator-box">
                        <div class="card rounded-0 b-0">
                            <div class="card-header">
                                <div class="row d-flex justify-content-between">
                                    <div class="cal-header-left-block">
                                        <h5 class="title">Tell Us Little More About Your Requirement?</h5>
                                        <h6 class="sub-title">Simply Follow Through</h6>
                                    </div>
                                    <div class="cal-header-right-block text-md-center">
                                        <h5 class="title">Call us</h5>
                                        <h5 class="mobile-nimber"><span class="fa fa-phone pr-3"></span>123 456 7891</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                                <div class="count text-center">
                                    <p class="mb-sm-0 pb-sm-0">
                                        <strong><span id="cnt">25</span>%</strong> 
                                        <span>Completed</span>
                                    </p>
                                </div>
                            </div>

                            <!------step1----->
                            <div class="card-body pt-0 noimage-only-text select-zone-block">
                                <h4 class="heading mb-4 pb-1">Select Zone</h4>

                                <div class="radio-group row justify-content-center px-3">

                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">EASTERN ZONE</h5>
                                        </div>
                                    </div>
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-circle"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">WESTERN ZONE</h5>
                                        </div>
                                    </div>
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-circle"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">SOUTHERN ZONE</h5>
                                            <h6 class="small-text">UNION TERRITORIES</h6>
                                        </div>
                                    </div>
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-circle"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">SOUTHERN ZONE</h5>
                                        </div>
                                    </div>
                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-circle"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <h5 class="mb-4">NORTHERN ZONE</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center"> <button class="btn btn-blue next mx-2" id="next1">Next<span class="fa fa-long-arrow-right"></span></button> </div>
                            </div>
                            <!------step1--end--->


                            <!------step2----->
                            <div class="card-body pt-0 select-your-state">
                                <h4 class="heading mb-4 pb-1">EASTERN ZONE: Select Your State</h4>

                                  <div class="radio-group row justify-content-center px-3">

                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">West Bengal West Bengal West Bengal West Bengal West Bengal West Bengal</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone2.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Bihar</h5>
                                        </div>
                                    </div>


                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone3.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Orissa</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone4.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Chhattisgarh</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone5.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Jharkhand</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/eastern-zone6.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Eastern UP</h5>
                                        </div>
                                    </div>

                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2"><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step2--end--->


                            <!------step3----->
                            <div class="card-body pt-0 room-type-block">
                                <h4 class="heading mb-4 pb-1">Select Room Type</h4>

                                  <div class="radio-group row justify-content-center px-3">

                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Bed Room</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-2.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Living Room</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-3.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Bathroom</h5>
                                        </div>
                                    </div>

                                    
                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2"><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step3--end--->


                            <!------step4----->
                            <div class="card-body pt-0 full-image-banner parameters-block">
                                <h4 class="heading mb-4 pb-1">Room Type Parameters</h4>

                                  <div class="radio-group row justify-content-center px-3">

                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters2.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Wall</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters3.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Ceiling</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters4.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Doors</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/room-type-parameters5.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Windows</h5>
                                        </div>
                                    </div>

                                    

                                    
                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2"><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step4--end--->


                            <!------step5----->
                            <div class="card-body show pt-0 full-image-banner material-block">
                                <h4 class="heading mb-4 pb-1">Sectct Flooring Material</h4>

                                  <div class="radio-group row justify-content-center px-3">

                                    <div class="card-block radio selected">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material1.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material2.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material3.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material4.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material5.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> <img src="images/calculator/material6.png" class="pic-0"> </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>


                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>

                                    <div class="card-block radio">
                                        <div class="radio-top-round-icon">
                                            <div class="fa fa-check"></div>
                                        </div>
                                        <div class="radio-image-text-block">
                                            <div class="pic"> 
                                                <!--<img src="images/calculator/material6.png" class="pic-0">-->
                                            </div>
                                            <h5 class="mb-4">Flooring Material Name</h5>
                                        </div>
                                    </div>
                                    

                                    

                                    

                                    
                                    
                                </div>
                                


                                <div class="row justify-content-center"> 
                                    <button class="btn btn-secondary prev mx-2"><span class="fa fa-long-arrow-left"></span>Back</button>

                                    <button class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">Next<span class="fa fa-long-arrow-right"></span></button> 
                                </div>
                            </div>
                            <!------step5--end--->



                            <div class="card-body pt-0">
                                <h4 class="heading mb-4 pb-1">Website details</h4> <label class="text-danger mb-3">* Required</label>
                                <div class="form-group"> <label class="form-control-label">Company Name :</label> <input type="text" id="cname" name="cname" placeholder="" class="form-control" onblur="validate2(1)"> </div>
                                <div class="form-group"> <label class="form-control-label">Zip Code :</label> <input type="text" id="zip" name="zip" placeholder="" class="form-control" onblur="validate2(2)"> </div>
                                <div class="form-group"> <label class="form-control-label">Website Title * :</label> <input type="text" id="title" name="title" placeholder="" class="form-control" onblur="validate2(3)"> </div>
                                <div class="form-group"> <label class="form-control-label">Website Description * :</label> <input type="text" id="desc" name="desc" placeholder="" class="form-control" onblur="validate2(4)"> </div>
                                <div class="form-group"> <label class="form-control-label">Website Type :</label>
                                    <div class="select mb-3"> <select name="type-info" class="form-control">
                                            <option>E-commerce</option>
                                            <option>Entertainment</option>
                                            <option>Personal</option>
                                            <option>Business</option>
                                            <option>Portfolio</option>
                                            <option>Education</option>
                                        </select> </div>
                                </div>
                                <div class="row justify-content-center"> <button class="btn btn-secondary prev mx-2"><span class="fa fa-long-arrow-left"></span>Back</button> <button class="btn btn-blue next mx-2" id="next3" onclick="validate2(0)">Next<span class="fa fa-long-arrow-right"></span></button> </div>
                            </div>

                            <div class="card-body pt-0">
                                <h4 class="heading mb-4 pb-1">Confirmation</h4>
                                <div class="row justify-content-start px-3">
                                    <p>Form has been submitted Successfully ! <br>You will recieve estimation on your email id and contact no.</p>
                                </div>
                                <div class="row justify-content-center"> <img src="https://i.imgur.com/krsWHvd.gif" class="check"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <!-----calculator--end--->

            </div>







        </div>
    </section>



      
    <?php include("include/footer.php");?> 

	<?php include("include/js.php");?>


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


    <!------calcluter---->

    <script type="text/javascript">
      

$('.radio-group .radio').click(function(){
    $('.selected .fa').removeClass('fa-check');
    $('.selected .fa').addClass('fa-circle');
    $('.radio').removeClass('selected');
    $(this).addClass('selected');
    $('.selected .fa').removeClass('fa-circle');
    $('.selected .fa').addClass('fa-check');
});

    </script>
    
    <!-----calcluter--->
   
  </body>
</html>
