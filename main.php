<?php
    require_once('connect.php');
    $hero_articles = $pdo -> query("SELECT * FROM hero_articles WHERE ID = 3") -> fetch();
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <!-- HEADER -->
    <?php require_once('./layout/header.php') ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main>
        <!-- HERO -->
        <section class="mainHero" style="background-image: url(./assets/img/<?php echo $hero_articles["img"]; ?>)">
            <article class="main_hero_article ">
                <h1><?php echo $hero_articles['title'] ?></h1>
                <p>
                    <?php echo nl2br($hero_articles['text']) ?>
                </p>
           </article>
        </section>
        <!-- END HERO -->
        <!-- CURRENT INVESTMENTS -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1>INVESTMENTS</h1>
                <div class="const_slider_arrows d-flex left" id="sliderBtn">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="mainSlider">

                    <div class="Current_slide_object">
                        <div class="slide_header Blue">   
                            <div class="slide_header_line"></div>
                            <h1></h1>
                        </div>
                        <h1 class="reward"></h1>
                        <div class="Current_image">
                            <img src="./assets/img/Construction/" alt="Golden Tulip">
                        </div>
                        <div class="objectDetails Blue">
                            <div class="d-flex justify-content-between">
                                <p class="obj_val_label ">Shareholding</p>
                                <p class="obj_val_label ">Value</p>
                            </div>
                            <div class="row justify-content-between">
                                <h2 class="obj_val ">40%</h2>
                                <h2 class="obj_val "></h2>
                            </div>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc "></p>        
                                <a href="./single_page.php">
                                    <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                </a>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- COMPLETED INVESTMENTS -->
        <section class="current_const ">
                <div class="const_header mx-auto d-flex justify-content-between">
                    <h1>CONSTRUCTION</h1>
                    <div class="const_slider_arrows d-flex left" id="sliderBtn1">
                        <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                        <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    </div>
                </div>
                <div class="Current_slider_outer">
                    <div class="Current_slider_inner d-flex " id="CompleteSlider">
                        <!-- OBJECT 1 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HOSPITALITY AND REAL ESTATE</h1>
                            </div>
                            <h1 class="reward">GOLDEN TULIP DESIGN HOTEL TBILISI</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/Golden Tulip/GT surati.png" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$15 million</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                         <!-- OBJECT 2 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HEALHCARE</h1>
                            </div>
                            <h1 class="reward">AMERICAN HOSPITAL TBILISI</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/American Hospital/hastane-1.jpg" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$45 million</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                        <!-- OBJECT 3 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HEALHCARE</h1>
                            </div>
                            <h1 class="reward">RADISSON HOTEL TBILISI</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/Radisson/park inn.png" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$45 000 000</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                        <!-- OBJECT 4 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HEALHCARE</h1>
                            </div>
                            <h1 class="reward">Pharma GMP</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/Pharma GMP/Untitled.png" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$32 000 000</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                        <!-- OBJECT 5 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HEALHCARE</h1>
                            </div>
                            <h1 class="reward">Pharma GMP</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/Pharma GMP/Untitled.png" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$32 000 000</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                        <!-- OBJECT 6 -->
                        <div class="Current_slide_object">
                            <div class="slide_header">   
                                <div class="slide_header_line"></div>
                                <h1>HEALHCARE</h1>
                            </div>
                            <h1 class="reward">Pharma GMP</h1>
                            <div class="Current_image">
                                <img src="./assets/img/Construction/Pharma GMP/Untitled.png" alt="Golden Tulip">
                            </div>
                            <div class="objectDetails">
                                <p class="obj_val_label">Value</p>
                                <h2 class="obj_val">$32 000 000</h2>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc">Tbilisi, Gorgia</p>        
                                    <a href="./single_page.php">
                                        <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="current_const black ">
                <!-- <div class="const_header mx-auto ">
                    <h1 class="btowc">PARTNERS</h1>
                </div> -->
            </section>
    </main>
    <!-- END CONTENT -->
    <footer class=" justify-content-between align-items-center d-flex ">
        <div class="footerContacts justify-content-between d-flex">
            <p>V.Beridze. #6, Tbilisi, Georgia 0108</p>

            <p>+995 598 399 388</p>
                
            <p>info@block.ge</p>        
        </div>
        
        <p class="footerSocial">facebook</p>
    </footer>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>
<?php $dbh = null; ?>