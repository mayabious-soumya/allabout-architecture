<?php
	session_start();
	
	include('include/db_conn.php');
	
	$bSideBarDisplay = 'display:none';
	//$bSideBarDisplay = '';
	//unset($_SESSION['ab_user']);
	$ab_user = array();
	if(isset($_SESSION['ab_user']))
	{
		$ab_user = $_SESSION['ab_user'];
		$bSideBarDisplay = '';
	}
	
	$txtSearch = '';
	$sh_cat_id = '0';
	$sh_zone_id = '0';
	
	
	
	$strSql = "
	SELECT zone_id, zone_name
	FROM tblzone
	where zone_status = 'A'
	";
	$dtSearchZone = getDatatable($strSql);	
	//print_r($dtSearchZone);
?>
<header class="navwrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="topnav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="workshop.php">Workshop </a></li>
                        <li><a href="edvideos.php">Ed Videos </a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <a href="index.php" class="logo"><img src="images/logo.png" class="img-fluid"></a>
                </div>
                <div class="col-sm-4">
                    <ul class="topnav">
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
						
                        <li>
						  <?php
						  if(isset($_SESSION['ab_user']))
						  {
							
							echo '<a href="javascript:void(0)" >Welcome '.$ab_user[0]['usr_name'].' </a>';
						  }
						  else
						  {
							?>
							<a href=""  data-toggle="modal" data-target="#modalLoginForm">Login / Colaborate </a>
							<?php
						  }
						  ?>	
                          
                        </li>


                    </ul>
                </div>
            </div>
        </div>

        <nav role='navigation' class="mobnav">
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
                <a href="index.php"><li>Home</li></a>
                <a href="workshop.php"><li>Workshop</li></a>
                <a href="edvideos.php"><li>Ed Videos</li></a>
                <a href="faq.php"><li>Faq</li></a>
                <a href="#"><li>Contact Us</li></a>
				<?php
				  if(isset($_SESSION['ab_user']))
				  {
					$ab_user = $_SESSION['ab_user'];
					echo '<a href="javascript:void(0);" ><li>Welcome '.$ab_user[0]['usr_name'].'</li> </a>';
				  }
				  else
				  {
					?>
					<a href="javascript:void(0);"  data-toggle="modal" data-target="#modalLoginForm"><li>Login / Colaborate</li></a>
					<?php
				  }
				  ?>
						  
						  
                <!-- <a href="#" target="_blank"><li>Login / Colaborate</li></a> -->
              </ul>
            </div>
          </nav>
    </header>


<!---left-bar--->
<div class="left-sidebar-main" style="<?php echo $bSideBarDisplay;?>" >
  <div class="left-sidebar-box">

    <div class="sidebar-header-block">
      <div class="user-details-block">
          <div class="user-image">
            <span><img src="images/login-user-image.png" alt="user"></span>
          </div>
          <div class="user-details">
            <h4 class="user-name">Admin Name Admin Name Admin Name</h4>
            <p>Other information Other information Other information</p>
          </div>
      </div>
      <div class="menu-icon" id="sidebar-toggle-menu">
        <span class="icon"><img src="images/leftbar-menu.png" alt="icon"></span>
      </div>
    </div>

    <div class="sidebar-menu-block">
      <ul class="menu-list">
        <li>
          <a href="javascript:void(0);" data-toggle="modal" data-target="#searchPopup">
            <div class="menu">
              <span class="menu-icon"><img src="images/search-icon.png" alt="icon"></span>
              <span class="menu-name">Search</span>
            </div>
          </a>
        </li>
		

        <li>
		  <?php
		  $usr_type = 'javascript:void(0);';
		  if(count($ab_user) > 0)
		  {
			 if($ab_user[0]['usr_type']=='S')
			 {
				$usr_type = 'sprofile.php';
			 }
			 else if($ab_user[0]['usr_type']=='M')
			 {
				$usr_type = 'mprofile.php';
			 }
			 else if($ab_user[0]['usr_type']=='P')
			 {
				$usr_type = 'pprofile.php';
			 }
			 else if($ab_user[0]['usr_type']=='C')
			 {
				$usr_type = 'cprofile.php';
			 }
		  }
		  ?>	
          <a href="<?php echo $usr_type;?>">
            <div class="menu">
              <span class="menu-icon"><img src="images/profile-icon.png" alt="icon"></span>
              <span class="menu-name">Profile</span>
            </div>
          </a>
        </li>
		
		<?php
		  if(count($ab_user) > 0)
		  {
			 if($ab_user[0]['usr_type']=='M')
			 {
				?>
				<li>
				  <a href="my-listings.php">
					<div class="menu">
					  <span class="menu-icon"><img src="images/my-listings-icon.png" alt="icon"></span>
					  <span class="menu-name">My Listings</span>
					</div>
				  </a>
				</li>
				<?php
			 }
		  }
		  ?>
        

		<!--
        <li>
          <a href="profile.php">
            <div class="menu">
              <span class="menu-icon"><img src="images/dashboard-icon.png" alt="icon"></span>
              <span class="menu-name">Profile</span>
            </div>
          </a>
        </li>
		
        <li>
          <a href="#">
            <div class="menu">
              <span class="menu-icon"><img src="images/auction-icon.png" alt="icon"></span>
              <span class="menu-name">Auction</span>
            </div>
          </a>
        </li>
		
        <li>
          <a href="#">
            <div class="menu">
              <span class="menu-icon"><img src="images/collaborate-icon.png" alt="icon"></span>
              <span class="menu-name">Collaborate</span>
            </div>
          </a>
        </li>

        <li>
          <a href="#">
            <div class="menu">
              <span class="menu-icon"><img src="images/my-workshops-icon.png" alt="icon"></span>
              <span class="menu-name">My workshops</span>
            </div>
          </a>
        </li>
		-->
		<li>
          <a href="logout.php">
            <div class="menu">
              <span class="menu-icon"><img src="images/logout.png" alt="icon"></span>
              <span class="menu-name">Logout</span>
            </div>
          </a>
        </li>


      </ul>
    </div>


  </div>
</div>

<!---left-bar--end--->



  <!----login-popup--->

<div class="modal fade login-registration-popup" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Login / Registration</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>


            <div class="modal-body">




              <div class="login-main-box" id="Login">
				<form id="frmLogin" name="frmLogin" action="login.php" method="post"  > 
                <div class="card2 card border-0 px-4">
                    
                    <div class="row px-3"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label> 
                      <input class="mb-4" type="text" name="lg_usr_email" id="lg_usr_email" placeholder="Enter a valid email address"> 
                    </div>

                    <div class="row px-3"> 
                      <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label> 
                      <input type="password" name="lg_usr_password" id="lg_usr_password" placeholder="Enter password"> 
                    </div>
					<!--
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> 
                          <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                          <label for="chk1" class="custom-control-label text-sm">Remember me</label> 
                        </div> 

                        <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
					-->

                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">-</small>
                        <div class="line"></div>
                    </div>

                    <div class="row mb-4 social-media-login" style="display:none;">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="google text-center mr-3">
                            <i class="fab fa-google"></i>
                        </div>
                        <div class="facebook text-center mr-3">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="twitter text-center mr-3">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    


                    <div class="row mb-3 submit-button-block"> 
                      <button type="submit" class="btn btn-blue text-center" style="display:none;">Login</button> 
                      <button type="button" class="btn btn-blue text-center" onClick="checkLogin()" >Login</button> 
                    </div>

                    <div class="row mb-4 account-button-block"> 
                      <small class="font-weight-bold">Don't have an account?
                        <a href="#" id="registration-button" class="text-danger">Registration</a>
                      </small> 
                    </div>

                </div>
				</form>
				
				
              </div>


              <div class="login-main-box" id="Registration" style="display: none;">
				<form id="frmRegister" name="frmRegister" action="registration-plan-choose.php" method="post"  > <!-- onSubmit="return checkRegister();" -->			
				
                   <div class="card2 card border-0 px-4">
                    

                    <div class="registration-form-block">

                      <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">User Name</h6></label> 
                        <input class="mb-4" type="text" name="usr_name" id="usr_name" placeholder="Enter User Name"> 
                      </div>
					  
					  <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label> 
                        <input class="mb-4" type="text" name="usr_password" id="usr_password" placeholder="Enter Password"> 
                      </div>
					  
					  <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Type</h6></label> 
                        <select class="mb-4 form-select" name="usr_type" id="usr_type" >
                          <option value="" selected>Select Type</option>
                          <option value="S">Student</option>
                          <option value="P">Professional</option>
                          <option value="M">Manufacturer</option>
                          <option value="C">Contributor</option>
                        </select> 
                      </div>
					  
						<!--
                      <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Last Name</h6></label> 
                        <input class="mb-4" type="text" name="Name" placeholder="Enter Last Name"> 
                      </div>
						-->

                      <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Contact No</h6></label> 
                        <input class="mb-4" type="text" name="usr_contact" id="usr_contact" placeholder="Enter Contact No"> 
                      </div>
					  
					  <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label> 
                        <input class="mb-4" type="text" name="usr_email" id="usr_email" placeholder="Enter a valid email address"> 
                      </div>

                      

                      

                    </div>

                    


                    <div class="row mb-3 submit-button-block"> 
                      <button type="button" id="btnRegister" name="btnRegister" class="btn btn-blue text-center" onClick="checkRegister()">Register</button> 
                      <button style="display:none;" type="submit" id="save_user" name="save_user" class="btn btn-blue text-center">Register</button> 
                    </div>

                    <div class="row mb-4 account-button-block"> 
                      <small class="font-weight-bold">You have already account?
                        <a href="#" id="login-button" class="text-danger">Login</a>
                      </small> 
                    </div>

                </div>


				</form>			
              </div>




            </div>
        </div>
    </div>
</div>

  <!----login-popup--open--->


    <!----search-popup--->

<div class="modal fade search-popup" id="searchPopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="search-main-block">
                <div class="row no-gutter">

                  <div class="col-sm-4">
                    <div class="search-box search-category">
                      <div class="header-block">
                        <h4 class="titel">Category</h4>
                      </div>
                      <div class="search-content-box">
                        <div class="catagorie-accordion-block">
                          
                          <div class="accordion" id="accordionExample">

                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#1tem1" aria-expanded="true" aria-controls="collapseOne">
                                    Item 1
                                  </button>
                                </h5>
                              </div>

                              <div id="1tem1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                   <ul class="list-group list-item-block">
                                   
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 1
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 2
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 3
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 4
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                   
                                  </ul>


                                </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#1tem2" aria-expanded="true" aria-controls="collapseOne">
                                    Item 2
                                  </button>
                                </h5>
                              </div>

                              <div id="1tem2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                   <ul class="list-group list-item-block">
                                   
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 1
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 2
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 3
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 4
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                   
                                  </ul>


                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#1tem3" aria-expanded="true" aria-controls="collapseOne">
                                    Item 3
                                  </button>
                                </h5>
                              </div>

                              <div id="1tem3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                   <ul class="list-group list-item-block">
                                   
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 1
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 2
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 3
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 4
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                   
                                  </ul>


                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#1tem4" aria-expanded="true" aria-controls="collapseOne">
                                    Item 4
                                  </button>
                                </h5>
                              </div>

                              <div id="1tem4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                   <ul class="list-group list-item-block">
                                   
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 1
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 2
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 3
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                    <li class="list-group-item">
                                      <div class="form-group mycheckboxdiv">
                                        <label>
                                            inner Item 4
                                          <input type="checkbox" data-ng-model="rememberMe" class="pull-right mycheckbox">
                                        </label> 
                                      </div>
                                    </li>
                                   
                                  </ul>


                                </div>
                              </div>
                            </div>




                          </div>
                          

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="search-box search-name">
                      <div class="header-block">
                        <h4 class="titel">Name</h4>
                      </div>
                      <div class="search-content-box">
                        <div class="search-by-name">
                          <form action="search.php" method="post" id="frmSearch" name="frmSearch" onSubmit="return checkSearch()" >
                            <div class="search-by-name-input">
                               <input id="txtSearch" name="txtSearch" class="form-control" type="text" placeholder="Enter Product Name..." >
                            </div>
                            <div class="search-logo">
                              <img src="images/search-logo.png" class="img-fluid">
                            </div>
                            <div class="search-button-block">
							  <input type="hidden" id="sh_cat_id" name="sh_cat_id" value="0" >	
							  <input type="hidden" id="sh_zone_id" name="sh_zone_id" value="0" >	
                              <button type="submit" class="btn search-button">Search</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="search-box search-zone">
                      <div class="header-block">
                        <h4 class="titel">Zone</h4>
                      </div>
                      <div class="search-content-box">
                        <div class="zone-block">
						  <?php
						  for($iRow=0;$iRow<=count($dtSearchZone)-1;$iRow++)
						  {
							echo '
							  <div class="zone-button-box">
								 <button id="z_'.$dtSearchZone[$iRow]['zone_id'].'" class="btn zone-button" data-zone_id="'.$dtSearchZone[$iRow]['zone_id'].'" >'.$dtSearchZone[$iRow]['zone_name'].'</button>
							  </div>
							';		
						  }
						  ?>
							<!--
                          <div class="zone-button-box">
                             <button class="btn zone-button">East Zone</button>
                          </div>
                          <div class="zone-button-box">
                             <button class="btn zone-button">West Zone</button>
                          </div>
                          <div class="zone-button-box">
                             <button class="btn zone-button">South Zone</button>
                          </div>
                          <div class="zone-button-box">
                             <button class="btn zone-button">North Zone</button>
                          </div>
						  -->

                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>


            </div>
        </div>
    </div>
</div>

  <!----search-popup--open--->
