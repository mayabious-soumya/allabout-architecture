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

    <!---<section class="inside-page-banner">
        <div class="owl-carousel owl-theme">
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
    </section>--->

    <section class="inside-page-banner">
        <img class="img-fluid" src="images/insidepage-banner.png" alt="inside-page">
    </section>


    <section class="insidepage-content-block product-list-main-bkock">
        <div class="container">
            <div class="main-titel-block">
                <h2>Product <span>List</span></h2>
            </div>
            
            <div class="product-list-block">
                

                <div class="product-list-top-block">

                    <div class="list-left-block">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Filter Name 1</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                    </div>


                    <div class="list-right-block">
                        
                        <div class="input-group rounded">
                          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                          <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                          </span>
                        </div>
                        
                    </div>
                </div>

                <!---->

                <div class="table-responsive">

                    
                <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead> 
                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Category</th>
                        <th>Product</th>
                        <th>Sample Request</th>
                        <th>Status</th>
                        <th>E-Impact</th>
                        <th>S-Impact</th>
                        <th>Env-Impact</th>
                        <th>Mod Adv</th> 
                        <th>Action</th>
                    </thead>
                    <tbody>
                            
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>


                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Category Name</td>
                            <td>Product Name</td>
                            <td>Sample Request</td>
                            <td>Status</td>
                            <td>E-Impact</td>
                            <td>S-Impact</td>
                            <td>Env-Impact</td>
                            <td>Mod Adv</td>
                            <td>
                                <span data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i></button></span>

                                <span data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-times"></i></button></span>

                            </td>
                            
                        </tr>
                            
                        
                   
                    
                     </tbody>
            
                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                  <li class="disabled"><span><i class="fa fa-arrow-left" aria-hidden="true"></i></span></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
                    
            </div>

                <!------end----->



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
