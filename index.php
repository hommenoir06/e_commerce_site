<?php session_start();
error_reporting(-1);
ini_set('display_errors','on');
require_once __DIR__.'/function/database.php';
?>
<?php require "template/header.php";?>
   
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Djik la reference</h4>
                            <h6>CHEZ NOUS, C'EST VOUS LA STAR.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="image/caroussel/c3.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="image/caroussel/c2.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="image/caroussel/c1.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>A propos de nous</h6>
                            <h2>Plus de mode</br>Plus de charisme</h2>
                        </div>
                        <p> Nous confectionnons des vêtements de tous modèles et de tous genres pour homme et dame.La satisfaction du client est notre priorité.</br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae fugit, consectetur obcaecati eaque eligendi facere vitae illo odio magnam sit animi velit doloribus deleniti ad, officia officiis pariatur labore rem?s</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="image/femme/1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="image/homme/6.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="image/femme/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="image/femme/9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Plus de style</h6>
                        <h2>Quelques selections...</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>$1600</h6></div>
                            <div class='info'>
                              <h1 class='title'>longue robe kiti blanche</h1>
                              <p class='description'>Lorem ipsum dolor sit amet consectetur</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleFemme.php">Voir plus<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>$1200</h6></div>
                            <div class='info'>
                              <h1 class='title'>longue robe kiti rouge</h1>
                              <p class='description'>Lorem ipsum dolor sit amet coo.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleFemme.php">Voir plus<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>$1200</h6></div>
                            <div class='info'>
                              <h1 class='title'>combinaison en pagne</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, cons.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleFemme.php">Voir plus<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>$1500</h6></div>
                            <div class='info'>
                              <h1 class='title'>Tunic</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consecte</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleHomme.php">Voir plus<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>$1500</h6></div>
                            <div class='info'>
                              <h1 class='title'>Tunic</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetu.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleHomme.php">Voir plus <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>$1375</h6></div>
                            <div class='info'>
                              <h1 class='title'>Chemise kita</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur .</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="articleHomme.php">Voir plus<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Nos stylistes</h6>
                        <h2>Les meilleurs du moments</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="image/s1.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Mariam Ba</h4>
                            <span>Styliste</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="image/s2.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Mobyo</h4>
                            <span>Styliste modèle</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="image/s3.jpg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Peter Huges</h4>
                            <span>Styliste</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                    <a href="index.php" class="logo">
                            <img id="logo" src="image/logo.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Bah ivene.
                        
                        <br>Tout droits reservés</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
     <?php require_once __DIR__.'/template/footer.php'; ?>
  </body>
</html>
