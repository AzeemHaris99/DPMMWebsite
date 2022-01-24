<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ahliKelab` WHERE CONCAT(`id`, `ic`, `namaSya`, `waktuTamat`, `status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `ahliKelab`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "mydpmmsc_root", "ritzanalytics", "mydpmmsc_DPMM");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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
        <title>Hasil Carian</title>
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
                                <a href="blogDPMM.html">Aktiviti DPMM</a>
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            
                                <li><a href="#contact">Hubungi</a></li>
                            
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
                                    <h1 class="hs-line-7 mb-20 mb-xs-10">Hasil Carian</h1>
                                </div>
                                <div class="wow fadeInUpShort" data-wow-delay=".2s">
                                    <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                                        Sebelum mendaftar, sila semak status keahlian anda jika pernah mendaftar.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-30 wow fadeInUpShort" data-wow-delay=".1s">
                                <div class="mod-breadcrumbs text-end">
                                    <a href="status.php">Status Keahlian</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span>Hasil Carian</span>
                                </div>                                
                            </div>

                            
                        </div>
                    
                    </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- Section -->
                <section class="align-center">
                    <form action="carian_status.php" method="post">
                        <br><br><input type="text" name="valueToSearch" placeholder="Nombor K.P."><br><br> 
                        <button class="submit_btn btn btn-mod btn-large btn-round" type="submit" name="search" value="Filter">Cari</button><br><br>
                        <div class="table-responsive">
                            <table class="table shopping-cart-table">
                                <?php while($row = mysqli_fetch_array($search_result)):
$servername = "localhost";
$username = "mydpmmsc_root";
$password = "ritzanalytics";
$dbname = "mydpmmsc_DPMM";
$valueToSearch = $_POST['valueToSearch'];
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="UPDATE ahliKelab SET status = 'TAMAT TEMPOH' WHERE waktuTamat <= CURRENT_TIMESTAMP";

        $res=$con->query($sql);

        }
$servername = "localhost";
$username = "mydpmmsc_root";
$password = "ritzanalytics";
$dbname = "mydpmmsc_DPMM";
$valueToSearch = $_POST['valueToSearch'];
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="UPDATE ahliKelab SET status = 'AKTIF' WHERE waktuTamat > CURRENT_TIMESTAMP";

        $res=$con->query($sql);

        }?>
                                
                                <tr>
                                    <td colspan="4" rowspan="6"><img src="images/logoSyarikat.png" alt="" height=100 width=100></img></td>
    
                                    <td colspan="4">ID</td>
                                    <td colspan="4"><?php echo $row['id'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Nombor K.P.</td>
                                    <td colspan="4"><?php echo $row['ic'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Nama</td>
                                    <td colspan="4"><?php echo $row['namaSya'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Tarikh Tamat Keahlian</td>
                                    <td colspan="4"><?php echo $row['waktuTamat'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Status Keahlian</td>
                                    <td colspan="4"><?php echo $row['status'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Yuran Keahlian DPMM (JIKA STATUS TIDAK AKTIF SAHAJA)</td>
                                    <td colspan="4"><a href="#" target="popup" onclick="window.open('https://sandbox.senangpay.my/payment/163409246144','popup'); return false;"><img alt="" src="https://sandbox.senangpay.my/public/img/pay.png"></a></td>
                                </tr>
                                <?php endwhile;?>
                            </table>
                    </form>      
                    </div>
                </section>
                <!-- End Section -->
                
                <!-- Divider -->
                <hr class="mt-0 mb-0" />
                <!-- End Divider -->

                
                <!-- Call Action Section -->
                <section class="page-section pt-0 pb-0 banner-section bg-dark light-content">
                    <div class="container relative">
                        
                        <div class="row">
                            
                            <div class="col-lg-6 relative">
                                <div class="banner-image-1">
                                    <img src="images/Putra531.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="292" />
                                </div>
                                <div class="banner-image-2">
                                    <img src="images/test380.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="70" />
                                </div>
                            </div>
                            
                            <div class="col-lg-5 offset-lg-1">                                
                                <div class="mt-140 mt-lg-80 mt-md-60 mt-xs-30 mb-140 mb-lg-80">
                                    <div class="banner-content wow fadeInUpShort" data-wow-duration="1.2s">
                                        <h3 class="banner-heading">Anda belum menjadi ahli DPMM?</h3>
                                        <div class="banner-decription">
                                            Sertai kami sekarang dengan menekan butang daftar dan mengisi e-borang ini!
                                        </div>
                                        <div class="local-scroll">
                                            <a href="daftar1.html" class="btn btn-mod btn-w btn-large btn-round">Daftar Ahli Biasa</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
                <!-- End Call Action Section -->
                
                <!-- Divider -->
                <hr class="mt-0 mb-0" />
                <!-- End Divider -->
                
                <!-- Contact Section -->
                <section class="page-section" id="contact">
                    <div class="container relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Hubungi</h2>
                            <p class="section-title-descr">
                                Untuk sebarang pertanyaan
                            </p>
                        </div>
                        
                        <div class="row mb-60 mb-xs-40">
                            
                            <div class="col-md-10 offset-md-1">
                                <div class="row">
                                    
                                    <!-- Phone -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div class="ci-title">
                                                Hubungi kami
                                            </div>
                                            <div class="ci-text">
                                                03-2633 2233
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Phone -->
                                    
                                    <!-- Address -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="ci-title">
                                                Alamat
                                            </div>
                                            <div class="ci-text">
                                                Anjung Melayu,
Lot 734, Jalan Bukit Petaling, off Jalan Lapangan terbang Lama, Bukit Petaling,
50460 Kuala Lumpur.
                                            </div>
                                            <div class="ci-link">
                                                <a href="https://www.google.com/maps/place/Dewan+Perniagaan+Melayu+Malaysia+(Main)/@3.1312781,101.700811,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc4903b1a86b37:0x573fa1322dbb78df!8m2!3d3.1312903!4d101.7030395" target="_blank">Lihat di peta Google</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Address -->
                                    
                                    <!-- Email -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="ci-title">
                                                Emel
                                            </div>
                                            <div class="ci-text">
                                                dpmmpusat@dpmm.org.my
                                            </div>
                                            <div class="ci-link">
                                                <a href="mailto:dpmmpusat@dpmm.org.my">Emel Kami</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Email -->
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
                <!-- End Contact Section -->
                
                
                <!-- Google Map -->
                <div class="google-map">
                    
                    <a href="https://www.google.com/maps/place/Dewan+Perniagaan+Melayu+Malaysia+(Main)/@3.1312781,101.700811,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc4903b1a86b37:0x573fa1322dbb78df!8m2!3d3.1312903!4d101.7030395" class="map-section">                        
                        <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                            <div class="mt-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="mt-text">
                                <div class="mt-open">Buka Peta <i class="mt-open-icon"></i></div>
                                <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                            </div>
                        </div>                        
                    </a>
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15935.446079978512!2d101.7029997!3d3.1312781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x573fa1322dbb78df!2sDewan%20Perniagaan%20Melayu%20Malaysia%20(Main)!5e0!3m2!1sen!2smy!4v1635077033024!5m2!1sen!2smy"  width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                </div>
                <!-- End Google Map -->
                
            </main>
            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-100 pb-sm-50">
                <div class="container">
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-90 mb-xs-40">
                        <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i> <span class="sr-only">Profil Facebook</span></a>
                        <a href="https://www.youtube.com/channel/UC8VtWHFzDxMb7K1VYj-mpEA" title="YouTube" target="_blank"><i class="fab fa-youtube"></i> <span class="sr-only">Saluran YouTube</span></a>
                    </div>
                    <!-- End Social Links -->
                    
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