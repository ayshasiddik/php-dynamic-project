
<!doctype html>
<html class="no-js" lang="en">
    <?php
    session_start();
    ?>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">
         <!--font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <?php
                        $id=$_SESSION['valied_id'];
                        $conect_database=mysqli_connect('localhost','root','','kufa') ;
                       $infot_query="SELECT * FROM admins WHERE id=$id;";
                       $infot_query_db=mysqli_query($conect_database,$infot_query);
                       $infot_query_db_array=mysqli_fetch_assoc($infot_query_db);
                    ?>
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$infot_query_db_array['office_address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$infot_query_db_array['phone_number']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$infot_query_db_array['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="<?=$infot_query_db_array['fblink']?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$infot_query_db_array['twlink']?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="<?=$infot_query_db_array['inslink']?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                    <a href="<?=$infot_query_db_array['plink']?>" target="_blank"> <i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will <?=$infot_query_db_array['name']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will <?=$infot_query_db_array['name']?>, professional web developer with long time experience in this field​.</p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                            
                                    <ul>
                                        <li><a href="<?=$infot_query_db_array['fblink']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$infot_query_db_array['twlink']?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$infot_query_db_array['inslink']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$infot_query_db_array['plink']?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <?php
                             $conect_database=mysqli_connect('localhost','root','','kufa');
                            $service_about_data_quary="SELECT * FROM `abouts` ";
                            $service_about_data_quary_db=mysqli_query($conect_database,$service_about_data_quary);
                      
                    ?>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                            <?php
                             $conect_database=mysqli_connect('localhost','root','','kufa');
                            $service_aboute_data_quary="SELECT * FROM `abouts` ";
                            $service_aboute_data_quary_db=mysqli_query($conect_database,$service_about_data_quary);
                            $service_aboute_data_quary_db_arry=mysqli_fetch_assoc($service_aboute_data_quary_db)
                      
                    ?>
                                <p><?=$service_aboute_data_quary_db_arry['service_description']?></p>
                                <h3>Skills:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php 
                            foreach (  $service_about_data_quary_db as  $about) {?>
                                <div class="education">
                                <div class="year"> <i class="<?=$about['service_icon']?>"></i></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$about['service_tittle']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$about['service_value']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                           
                            
                            <!-- End Education Item -->
                           
                            
                           
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
            
                   <div class="row">
                   <?php
                    $conect_database=mysqli_connect('localhost','root','','kufa');
                    $service_data_quary="SELECT * FROM `services` WHERE `service_status`='active'";
                    $service_data_quary_db=mysqli_query($conect_database,$service_data_quary);
                   
                  foreach ($service_data_quary_db as  $service): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['service_icon']?>"></i>
								<h3><?=$service['service_tittle']?></h3>
								<p><?=$service['service_description']?></p>
							</div>
                         </div>
                <?php
                  endforeach
                     ?>		
				</div>

			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
              
            <?php
                
                $conect_database=mysqli_connect('localhost','root','','kufa');
                $imageservice_select_querry="SELECT * FROM `imageservices`";
                $imageservice_select_querry_db=mysqli_query($conect_database, $imageservice_select_querry);
                
                                                
            ?>
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                   
                        <div class="container">
                        <div class="row">
                        <?php
                    foreach ($imageservice_select_querry_db as  $service) {?>

                          
                        <div class="col-lg-4 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="../uploade/gallery/<?=$service['service_image']?>" alt="img" height="500" width="200">
								</div>
								<div class="speaker-overlay">
									<span><?=$service['service_tittle']?></span>
									<h4><a href="./details.php?id=<?=$service['id']?>"><?=$service['service_heading']?></a></h4>
									<a href="./details.php?id=<?=$service['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                            
                        </div>
                        <?php  
                               }
                   
                             ?>
                      </div>   
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
           		
				
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                        <?php
                    $conect_database=mysqli_connect('localhost','root','','kufa');
                    $servicetwo_data_quary="SELECT * FROM `servicestwoo`";
                    $servicetwo_data_quary_db=mysqli_query($conect_database,$servicetwo_data_quary);
                   
                  foreach ($servicetwo_data_quary_db as  $service): ?>
                   <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$service['service_icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$service['service_value']?></span></h2>
                                        <span><?=$service['service_tittle']?></span>
                                    </div>
                                </div>
                            </div>
						
                <?php
                  endforeach
                     ?>
                           
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <?php
                    $conect_database=mysqli_connect('localhost','root','','kufa');
                    $testimonial_data_quary="SELECT * FROM `testimonialservices`";
                    $servicetwo_data_quary_db=mysqli_query($conect_database,$testimonial_data_quary);
                   ?>
                   
                    <div class="row justify-content-center">
                    
                       
                        <div class="col-xl-9 col-lg-10">
                  
                            <div class="testimonial-active">
                            <?php
                          foreach ($servicetwo_data_quary_db as  $service){  ?>
                                <div class="single-testimonial text-center">
                              
                                    <div class="testi-avatar">
                                    <img src="../uploade/Tsmlpic/<?=$service['p_image']?>" alt="img" height="100" width="100" style="border-radius:50%">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“<?=$service['comments']?>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$service['info_tiitle']?></h5>
                                            <span><?=$service['info_subtitle']?></span>
                                        </div>
                                
                                    </div>
                                
                                </div>
                                <?php
                          }
                                ?>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <?php
                    $conect_database=mysqli_connect('localhost','root','','kufa');
                    $testimonial_data_quary="SELECT * FROM `footerimages`";
                    $servicetwo_data_quary_db=mysqli_query($conect_database,$testimonial_data_quary);
                    
                    
                   ?>
                   
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php foreach ($servicetwo_data_quary_db as  $service) {?>
                             <div class="col-xl-3">
                             <div class="single-brand">
                             <img src="../uploade/footer/<?=$service['imageone']?>" alt="img" >
                             </div>
                         </div>
                         <?php
                        }
                       ?>
                       
                        
                        
                        
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <?php
                        $id=$_SESSION['valied_id'];
                        $conect_database=mysqli_connect('localhost','root','','kufa') ;
                       $info_query="SELECT * FROM admins WHERE id=$id;";
                       $info_query_db=mysqli_query($conect_database,$info_query);
                       $info_query_db_array=mysqli_fetch_assoc($info_query_db);
                    ?>
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $info_query_db_array['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $info_query_db_array['phone_number']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $info_query_db_array['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="../contact_mail_data.php" method='post'>
                                <?php
                                        if(isset($_SESSION['success_data'])){?>
                                            <div class="alert alert-success text-center" role="alert">
                                            <p class="text-dark"><?= $_SESSION['success_data']?></p>
                                        </div>
                                        <?php
                                        }
                                       unset($_SESSION['success_data']);
                                        ?>
                                    <input type="text" placeholder="your name *" name="name">
                                    <?php
                                    if(isset($_SESSION["name_error"])){?>
                                      <p class="text-danger"> <?=$_SESSION["name_error"]?></p>
                                   <?php     
                                    }
                                    unset($_SESSION["name_error"]);
                                    ?>
                                    <input type="email" placeholder="your email *" name="email">
                                    <?php
                                    if(isset($_SESSION["email_error"])){?>
                                      <p class="text-danger"> <?=$_SESSION["email_error"]?></p>
                                   <?php     
                                    }
                                    unset($_SESSION["email_error"])
                                    ?>
                                    <textarea name="massage" id="message" placeholder="your message *" ></textarea>
                                    <?php
                                    if(isset($_SESSION["massage_error"])){?>
                                      <p class="text-danger"> <?=$_SESSION["massage_error"]?></p>
                                   <?php     
                                    }
                                    unset($_SESSION["massage_error"])
                                    ?>
                                    <button class="btn">SEND</button>
                                    <br>
                                    <br>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
