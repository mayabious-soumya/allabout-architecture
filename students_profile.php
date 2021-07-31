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
                <h2>Account settings</h2>
            </div>

            

            <!----registration--->

            <div class="profile-block">


              <div class="container light-style flex-grow-1 container-p-y">

                <h4 class="font-weight-bold py-3 mb-4">
                  User Name 
                </h4>

                <div class="card overflow-hidden">
                  <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                      <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>

                        <!---
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>--->




                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                          <div class="card-body media align-items-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80">

                            <div class="media-body ml-4">
                              <label class="btn btn-outline-primary">
                                Upload new photo
                                <input type="file" class="account-settings-fileinput">
                              </label> &nbsp;
                              <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                              <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>


                          </div>
                          <hr class="border-light m-0">

                          <div class="card-body">

                            <div class="form-section-block">
                              <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control mb-1" value="Address">
                              </div>
                              <div class="form-row">
                                <div class="form-group col-sm-4">
                                  <label class="form-label">City</label>
                                  <input type="text" class="form-control mb-1" value="City">
                                </div>
                                <div class="form-group col-sm-4">
                                  <label class="form-label">State</label>
                                  <input type="text" class="form-control mb-1" value="State">
                                </div>
                                <div class="form-group col-sm-4">
                                  <label class="form-label">Pincode</label>
                                  <input type="text" class="form-control mb-1" value="Pincode">
                                </div>
                              </div>
                            </div>


                            <div class="form-section-block">
                              
                              
                                <div class="form-group">
                                  <label class="form-label">Student</label>
                                  <input type="text" class="form-control mb-1" value="Professionals">
                                </div>
                                <div class="form-group">
                                  <label class="form-label">Identity Card</label>
                                  
                                  <div class="media-body">
                                    <label class="btn btn-outline-primary">
                                      Upload new photo
                                      <input type="file" class="account-settings-fileinput">
                                    </label> 
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                    <div class="text-light small mt-1" style="color:#333 !important">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                  </div>

                                </div>                                
                              

                              
                            </div>

                            


                            <div class="form-section-block">

                              <div class="form-group">
                                <label class="form-label">What can you Give to the community</label>
                                <input type="text" class="form-control" value="">
                              </div>

                              <div class="form-group">
                                <label class="form-label">Proficiency</label>
                                <input type="text" class="form-control" value="">
                              </div>

                              <div class="form-group">
                                <label class="form-label">Education Quaalification (University)</label>
                                <input type="text" class="form-control" value="">
                              </div>

                            </div>



                            <div class="form-section-block">

                              <div class="form-group">
                                <label class="form-label">What can you need from the Community with?</label>
                                <input type="text" class="form-control" value="">
                              </div>

                              <div class="form-group">
                                <label class="form-label">You Interest</label>
                                
                                <div class="row d-flex justify-content-center mt-100">
                                  <div class="col-md-12"> <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                                          <option value="HTML">HTML</option>
                                          <option value="Jquery">Jquery</option>
                                          <option value="CSS">CSS</option>
                                          <option value="Bootstrap 3">Bootstrap 3</option>
                                          <option value="Bootstrap 4">Bootstrap 4</option>
                                          <option value="Java">Java</option>
                                          <option value="Javascript">Javascript</option>
                                          <option value="Angular">Angular</option>
                                          <option value="Python">Python</option>
                                          <option value="Hybris">Hybris</option>
                                          <option value="SQL">SQL</option>
                                          <option value="NOSQL">NOSQL</option>
                                          <option value="NodeJS">NodeJS</option>
                                      </select> </div>
                              </div>

                              </div>

                              

                            </div>



                           




                            


                            <!----
                            <div class="form-group">
                              <label class="form-label">GST Certificate (If available)</label>
                              <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                              <div class="alert alert-warning mt-3">
                                Your email is not confirmed. Please check your inbox.<br>
                                <a href="javascript:void(0)">Resend confirmation</a>
                              </div>
                            </div>
                            ---->


                          </div>

                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                          <div class="card-body pb-2">

                            <div class="form-group">
                              <label class="form-label">Current password</label>
                              <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                              <label class="form-label">New password</label>
                              <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                              <label class="form-label">Repeat new password</label>
                              <input type="password" class="form-control">
                            </div>

                          </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                          <div class="card-body pb-2">

                            <div class="form-group">
                              <label class="form-label">Bio</label>
                              <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                            </div>
                            <div class="form-group">
                              <label class="form-label">Birthday</label>
                              <input type="text" class="form-control" value="May 3, 1995">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Country</label>
                              <select class="custom-select">
                                <option>USA</option>
                                <option selected="">Canada</option>
                                <option>UK</option>
                                <option>Germany</option>
                                <option>France</option>
                              </select>
                            </div>


                          </div>
                          <hr class="border-light m-0">
                          <div class="card-body pb-2">

                            <h6 class="mb-4">Contacts</h6>
                            <div class="form-group">
                              <label class="form-label">Phone</label>
                              <input type="text" class="form-control" value="+0 (123) 456 7891">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Website</label>
                              <input type="text" class="form-control" value="">
                            </div>

                          </div>
                  
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                          <div class="card-body pb-2">

                            <div class="form-group">
                              <label class="form-label">Twitter</label>
                              <input type="text" class="form-control" value="https://twitter.com/user">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Facebook</label>
                              <input type="text" class="form-control" value="https://www.facebook.com/user">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Google+</label>
                              <input type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                              <label class="form-label">LinkedIn</label>
                              <input type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Instagram</label>
                              <input type="text" class="form-control" value="https://www.instagram.com/user">
                            </div>

                          </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                          <div class="card-body">
                            <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                          </div>
                          <hr class="border-light m-0">
                          <div class="card-body">
                            <h5 class="mb-2">
                              <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                              <i class="ion ion-logo-google text-google"></i>
                              You are connected to Google:
                            </h5>
                            nmaxwell@mail.com
                          </div>
                          <hr class="border-light m-0">
                          <div class="card-body">
                            <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                          </div>
                          <hr class="border-light m-0">
                          <div class="card-body">
                            <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                          <div class="card-body pb-2">

                            <h6 class="mb-4">Activity</h6>

                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input" checked="">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">Email me when someone comments on my article</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input" checked="">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">Email me when someone answers on my forum thread</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">Email me when someone follows me</span>
                              </label>
                            </div>
                          </div>
                          <hr class="border-light m-0">
                          <div class="card-body pb-2">

                            <h6 class="mb-4">Application</h6>

                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input" checked="">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">News and announcements</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">Weekly product updates</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="switcher">
                                <input type="checkbox" class="switcher-input" checked="">
                                <span class="switcher-indicator">
                                  <span class="switcher-yes"></span>
                                  <span class="switcher-no"></span>
                                </span>
                                <span class="switcher-label">Weekly blog digest</span>
                              </label>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-right mt-3">
                  <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
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
   
   





<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:5,
searchResultLimit:5,
renderChoiceLimit:5
});


});
</script>


  </body>
</html>
