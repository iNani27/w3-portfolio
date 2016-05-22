<?php
include_once 'view/inc/meta.php';
?>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

    <?php
    include_once 'view/inc/nav.php';
    ?>       

    <!-- Overlay effect when opening sidenav on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header class="w3-container">
            <img src="view/img/isabelleNaniSqL.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
            <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <h1 class="w3-animate-opacity w3-font-3 w3-text-teal w3-lobster font-effect-brick-sign"><b>Mon portfolio</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16">
                <span>Catégories :  </span> 
                <button class="w3-btn"> Aléatoire </button>
                <button class="w3-btn w3-white"><i class="fa fa-code"></i>  Development </button>
                <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-diamond"></i>  Design</button>
                <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-map-pin"></i>  Art</button>
            </div>
        </header>

        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://localhost/wordpress/index.php/" target="_blank" title="Coming asap">
                    <img src="view/img/summer_style.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Summer style</b></p>
                    <p>
                        Technologie : Wordpress<br />
                        Dévelopement d'un modul rss
                    </p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://localhost/wordpress/index.php/page-d-exemple/rss-favorite-feeds/" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://localhost/WWamp150502/php/Resp-flat/apps/html5up-tessellate/" target="_blank" title="Coming asap">
                    <img src="view/img/ciel.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Responsive Flat Design</b></p>
                    <p>Technologie : HTML5<br />
                        Intégration theme
                    </p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://localhost/WWamp150502/php/Resp-flat/apps/html5up-tessellate/" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site1/index.html" target="_blank" title="Coming asap">
                    <img src="view/img/bott.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Bott</b></p>
                    <p>Technologie : HTML5<br />
                        Design cutting</p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site1/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>
        </div>





        <!-- Second Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site2-audio/europe.html" target="_blank" title="Coming asap">
                    <img src="view/img/schuiten.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>World music</b></p>
                    <p>Technologie : HTML5 Audio<br />
                        Carte clicable</p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site2-audio/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/actu.html" target="_blank">
                    <img src="view/img/prefo.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>First site </b></p>

                    <p>Site de validation du choix professionnel<br />
                        Pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/portfolio/web1/"><img width="11%" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m"></a></p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/php-site/index.php" target="_blank" title="Coming asap">
                    <img src="view/img/monet.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Tempus leo</b></p>
                    <p>Technologie : PHP SQL<br />
                        Dévelopement d'une IA des liens par catégories</p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/php-site/links.php" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>

        </div>

        <!-- Third Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://localhost/bootstrap_theinani/#section3" target="_blank" title="Coming asap">
                    <img src="view/img/interior.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Parallax</b></p>
                    <p>Technologie : Boostrap<br />
                        Galerie image
                    </p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://localhost/bootstrap_theinani/#section3" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://localhost/Bs-INani/index.html" target="_blank" title="Coming asap">
                    <img src="view/img/bs.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Bs creation</b></p>
                    <p>Technologie : Boostrap<br />
                        App Bs lib 
                    </p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://localhost/Bs-INani/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>


            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://localhost/bootstrap_theinani/" target="_blank" title="Coming asap">
                    <img src="view/img/since.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Parallax</b></p>
                    <p>Technologie : Boostrap<br />
                        Integration theme
                    </p>
                    <p><a class="w3-btn w3-margin w3-right" href="http://localhost/bootstrap_theinani/" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="w3-center w3-padding-jumbo">
            <ul class="w3-pagination">
                <li><a class="w3-black" href="#">1</a></li>
                <li><a class="w3-hover-black" href="#">2</a></li>
                <li><a class="w3-hover-black" href="#">3</a></li>
                <li><a class="w3-hover-black" href="#">4</a></li>
                <li><a class="w3-hover-black" href="#">»</a></li>
            </ul>
        </div>

        <!-- Footer - begin -->
        <?php
        include_once 'view/inc/footer.php';
        ?> 
        <!-- Footer - end -->

        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidenav
        function w3_open() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
            document.getElementsByClassName("w3-overlay")[0].style.display = "block";
        }

        function w3_close() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
            document.getElementsByClassName("w3-overlay")[0].style.display = "none";
        }
    </script>

</body>
</html>
