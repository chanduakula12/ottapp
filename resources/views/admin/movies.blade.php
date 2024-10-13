<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="css/semantic.min.js" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-lBISJVJ49zh34fnUuAaSAyuYzQ2ioGvhm4As4Z1JFde0kVpaC1FFWD3f9adpZrdD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.bundle.min.js" integrity="sha384-yoEOGIfJg9mO8eOS9dgSYBXwb2hCCE+AMiJYavhAofzm8AoyVE241kjON695K1v5" crossorigin="anonymous"></script>
   </head>
   <body class="inner_page contact_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
           @include('admin.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('admin.navbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Movies</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <form action="{{route('admin.addmovie')}}"  method="get">
                                    <button class="btn btn-primary">Add Movie</button>
</form>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                    <!-- column contact --> 
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <h4 class="brief">Digital Strategist</h4>
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Frontend Developer</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="images/layout_img/msg2.png" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                <div class="left_rating">
                                                   <p class="ratings">
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star"></span></a>
                                                      <a href="#"><span class="fa fa-star-o"></span></a>
                                                   </p>
                                                </div>
                                                <div class="right_button">
                                                   <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i> 
                                                   </button>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column contact blog -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                     <div class="container-fluid">
                        <div class="footer">
                           <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                              Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->     
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>