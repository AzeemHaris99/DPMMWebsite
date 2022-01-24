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
                        <a class="logo">
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
                            
                                <li><a href="index.html">Log Keluar</a></li>
                            
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
                                        Senarai Keahlian DPMM
                                    </p>
                                </div>
                            </div>

                            
                        </div>
                    
                    </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- Section -->
                <section class="align-center">
                    <div class="container">
                    <form action="admin_page.php" method="post">
                        <br><br><input type="text" name="valueToSearch" placeholder="Nombor K.P."><br><br> 
                        <button class="submit_btn btn btn-mod btn-large btn-round" type="submit" name="search" value="Filter">Cari</button><br><br>
                        <div class="table-responsive">
                            <table class="table shopping-cart-table">
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBOR K.P.</th>
                                    <th>NAMA SYARIKAT</th>
                                    <th>TARIKH TAMAT KEAHLIAN</th>
                                    <th>STATUS KEAHLIAN</th>
                                </tr>

                                <!-- populate table from mysql database -->
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
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['ic'];?></td>
                                    <td><?php echo $row['namaSya'];?></td>
                                    <td><?php echo $row['waktuTamat'];?></td>
                                    <td><?php echo $row['status'];?></td>
                                </tr>
                                <?php endwhile;?>
                            </table>
                        </div>    
                    </form>    
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