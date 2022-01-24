<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where uname='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: admin_page.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-W85M6NFS7M"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-W85M6NFS7M');
        </script>
        <title>Admin</title>
        <meta name="description" content="">    
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon1.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/splitting.css">
        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav dark light-after-scroll transparent stick-fixed wow-menubar">
                <div class="full-wrapper relative clearfix">
                    
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo">
                            <img src="images/Logo-DPMM.png" alt="Company logo" width="188" height="37"/>
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <!-- Item With Sub -->
                            <li class="active"><a href="index.html">Utama</a></li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Keahlian <i class="mn-has-sub-icon"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="keahlian.html" class="mn-has-sub">Jenis Keahlian</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Daftar Keahlian<i class="mn-has-sub-icon-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="daftar1.html">Borang Ahli Kelab</a>
                                            </li>
                                            <li>
                                                <a href="#" class="mn-has-sub">Ahli Korporat<i class="mn-has-sub-icon-right right"></i></a>
                                                <ul class="mn-sub">
                                                    <li>
                                                        <a href="#modalbox" class="mn-has-sub">Borang Ahli Korporat</a>
                                                    </li>
                                                    <li>
                                                        <a href="TestSijil1.php" class="mn-has-sub">Sijil Ahli Korporat</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#modalbox" class="mn-has-sub">Borang Ahli Bersekutu</a>
                                            </li>
                                            <li>
                                                <a href="#modalbox" class="mn-has-sub">Borang Ahli Gabungan</a>
                                            </li>
                                            <li>
                                                <a href="#modalbox" class="mn-has-sub">Borang Ahli Kehormat</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="status.php" class="mn-has-sub">Semak Keahlian</a>
                                    </li>

                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <!--<li>-->
                            <!--    <a href="#" class="mn-has-sub">Informasi <i class="mn-has-sub-icon"></i></a>-->
                                
                                <!-- Sub Multilevel -->
                            <!--    <ul class="mn-sub mn-has-multi">-->
                                    
                            <!--        <li class="mn-sub-multi">-->
                            <!--            <a href="blogDPMM.html" class="mn-group-title">Informasi Terkini</a>-->
                                        
                            <!--            <ul>-->
                            <!--                <li>-->
                            <!--                    <a href="#">Pustaka Video</a>-->
                            <!--                </li>-->
                            <!--            </ul>-->
                                        
                            <!--        </li>-->
                                    

                            <!--    </ul>-->
                                <!-- End Sub Multilevel -->
                                
                            <!--</li>-->
                            <!-- End Item With Sub -->
                            
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="blogDPMM.html">Aktiviti DPMM</a></li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            
                                <li><a href="admin_login.php">Admin</a></li>
                            
                            <!-- End Item With Sub -->
                            
                            
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation panel -->
            
            <main id="main">
                <div id="modalbox" class="modal">
                    <div class="modalcontent">
                        <h3>Arahan</h3>
                        <p>Sila lengkapkan borang tersebut dan hantar menerusi emel <a href="mailto:dpmmpusat@dpmm.org.my">dpmmpusat@dpmm.org.my</a>.</p>
                        <h3><a href="images/BORANG AHLI KORPORAT, GABUNGAN, BERSEKUTU DAN KEHORMAT.pdf" target="popup" onclick="window.open('https://mydpmms.com/Kelab/images/BORANG AHLI KORPORAT, GABUNGAN, BERSEKUTU DAN KEHORMAT.pdf,'popup'); return false;">Muat Turun Borang</a></h3>
                        <a href="#" class="modalclose">&times;</a>
                    </div>
                </div>
            
                <!-- Home Section -->
                <section class="small-section bg-dark-alfa-50 bg-scroll light-content" data-background="images/dpmm4.jpg" id="home">
                    <div class="container relative">
                    
                        <div class="row">
                            
                            <div class="col-md-8">
                                <div class="wow fadeInUpShort" data-wow-delay=".1s">
                                    <h1 class="hs-line-7 mb-20 mb-xs-10">Admin</h1>
                                </div>
                                <div class="wow fadeInUpShort" data-wow-delay=".2s">
                                    <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                                        Masukkan nama pengguna dan kata laluan
                                    </p>
                                </div>
                            </div>

                            
                        </div>
                    
                    </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- Section -->
                <section class="page-section">
                    <div class="container">
                    <form method="post" action="">
                        
                        <!-- Nav Tabs -->
                        <div class="align-center mb-70 mb-xxs-50 wow fadeInUpShort">
                            <ul class="nav nav-tabs tpl-minimal-tabs animate" id="myTab-account" role="tablist">
                                
                                <li class="nav-item">
                                    <a href="#account-login" class="nav-link active" id="account-login-tab" data-bs-toggle="tab"  role="tab" aria-controls="account-login" aria-selected="true">Log Masuk</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- End Nav Tabs -->
						
                        <!-- Tab panes -->
                        <div class="tab-content tpl-minimal-tabs-cont section-text wow fadeInUpShort" id="myTabContent-1">
                            
                            <div class="tab-pane fade show active" id="account-login" role="tabpanel" aria-labelledby="account-login-tab">
                                
                                <!-- Login Form -->                            
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <form class="form contact-form">
                                            <div class="clearfix">
                                                
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="username">Nama Pengguna</label>
                                                    <input type="text" name="txt_uname" id="txt_uname" class="input-lg round form-control" placeholder="Masukkan nama pengguna" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                
                                                <!-- Password -->
                                                <div class="form-group">
                                                    <label for="password">Kata Laluan</label>
                                                    <input type="password" name="txt_pwd" id="txt_pwd" class="input-lg round form-control" placeholder="Masukkan kata laluan" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                    
                                            </div>
                                            
                                            <div class="clearfix">
                                                
                                                <div class="align-center">
                                                    
                                                    <!-- Send Button -->
                                                    <button class="submit_btn btn btn-mod btn-large btn-round" type="submit" name="but_submit" id="but_submit">Log Masuk</button>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </form>
                                        
                                    </div>
                                </div>
                                <!-- End Login Form -->
                                
                            </div>
                            
                        </div>
                                                
                    </form>            
                    </div>
                </section>
                <!-- End Section -->
                
            </main>
            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-100 pb-sm-50">
                <div class="container">
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy">
                            <a href="index.html">© DPMM 2021</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            BERJASA - BERJAYA BANGSA
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="link-to-top-icon"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.viewport.mini.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.lazyload.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/morphext.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/contact-form.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/objectFitPolyfill.min.js"></script>
        <script src="js/splitting.min.js"></script>
        
    </body>
</html>
