<?php
include_once 'view/inc/meta.php';
?>
<link rel="stylesheet" href="view/css/mz/style.css"> <!-- Resource style -->
<script src="view/js/mz/modernizr.js"></script> <!-- Modernizr -->
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

    <?php
    include_once 'view/inc/nav.php';
    ?>       

    <!-- Overlay effect when opening sidenav on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">


        <main class="cd-main-content">
            <div class="cd-tab-filter-wrapper">
                <div class="cd-tab-filter">
                    <ul class="cd-filters">
                        <li class="placeholder"> 
                            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                        </li> 
                        <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                        <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Development</a></li>
                        <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Integration</a></li>
                        <li class="filter" data-filter=".color-3"><a href="#0" data-type="color-3">Design</a></li>
                    </ul> <!-- cd-filters -->
                </div> <!-- cd-tab-filter -->
            </div> <!-- cd-tab-filter-wrapper -->

            <section class="cd-gallery">
                <ul>
                    <li class="mix color-1"><div class="w3-third w3-container w3-margin-bottom">
                            <a href="http://localhost/wordpress/index.php/" target="_blank" title="Coming asap">
                                <img src="view/img/summer_style.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                            </a>
                            <div class="w3-container w3-white">
                                <p><b>Summer style</b></p>
                                <p>
                                    Technologie : Wordpress<br />
                                    Dévelopement d'un modul rss
                                </p>
                                <p><a class="w3-btn w3-margin w3-right" href="http://localhost/wordpress/index.php/page-d-exemple/rss-favorite-feeds/" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> visiter</a></p>
                            </div>
                        </div></li>
                    <li class="mix color-2"><div class="w3-third w3-container w3-margin-bottom">
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
                        </div></li>
                    <li class="mix color-3"><div class="w3-third w3-container w3-margin-bottom">
                            <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site1/index.html" target="_blank" title="Coming asap">
                                <img src="view/img/bott.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                            </a>
                            <div class="w3-container w3-white">
                                <p><b>Bott</b></p>
                                <p>Technologie : HTML5<br />
                                    Design cutting</p>
                                <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site1/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                            </div>
                        </div></li>
                    <li class="mix color-1"><div class="w3-third w3-container w3-margin-bottom">
                            <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site2-audio/europe.html" target="_blank" title="Coming asap">
                                <img src="view/img/schuiten.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                            </a>
                            <div class="w3-container w3-white">
                                <p><b>World music</b></p>
                                <p>Technologie : HTML5 Audio<br />
                                    Carte clicable</p>
                                <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/html5-site2-audio/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                            </div>
                        </div></li>

                    <li class="mix color-3"><div class="w3-third w3-container w3-margin-bottom">
                            <a href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/actu.html" target="_blank">
                                <img src="view/img/prefo.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                            </a>
                            <div class="w3-container w3-white">
                                <p><b>First site </b></p>

                                <p>Site de validation du choix professionnel<br />
                                    Pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/portfolio/web1/">

<!--<img width="" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m">-->
                                        Cf2m</a></p>
                                <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                            </div>
                        </div></li>
                    <li class="mix color-1"><div class="w3-third w3-container w3-margin-bottom">
                            <a href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/php-site/index.php" target="_blank" title="Coming asap">
                                <img src="view/img/monet.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                            </a>
                            <div class="w3-container w3-white">
                                <p><b>Tempus leo</b></p>
                                <p>Technologie : PHP SQL<br />
                                    Dévelopement d'une IA des liens par catégories</p>
                                <p><a class="w3-btn w3-margin w3-right" href="http://stagiaires.cf2m.be/web2015/isabelle/cf2m_2015/php-site/links.php" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
                            </div>
                        </div></li>
                    <li class="mix color-2"><div class="w3-third w3-container w3-margin-bottom">
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
                        </div></li>
                    <li class="mix color-3"><div class="w3-third w3-container w3-margin-bottom">
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
                        </div></li>

                    <li class="mix color-2"><div class="w3-third w3-container w3-margin-bottom">
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
                        </div></li>

                </ul>

            </section> <!-- cd-gallery -->

    </div>
    <!-- #carbonads-container -->
    <script src="view/js/mz/jquery-2.1.1.js"></script>
    <script src="view/js/mz/jquery.mixitup.min.js"></script>
    <script src="view/js/mz/main.js"></script> <!-- Resource jQuery -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48014931-1', 'codyhouse.co');
        ga('send', 'pageview');

        jQuery(document).ready(function($) {
            $('.close-carbon-adv').on('click', function(event) {
                event.preventDefault();
                $('#carbonads-container').hide();
            });
        });
    </script>

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
