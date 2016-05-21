<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="http://localhost/portfolio/app/vue/img/favicon.ico" />
        <meta charset="utf-8" /> 
        <title>Isabelle NANI | Web Dev</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="view/css/mz/style.css"> <!-- Resource style -->

        <link rel="stylesheet" href="view/css/styles.css">

        <script src="view/js/mz/modernizr.js"></script> <!-- Modernizr -->

        <style>
            .btnxxlargeround{
                margin-bottom: 10px;
                padding: 1px 12px;
                border-radius : 10px;
                background-color: black;
                color: white;
            }
            .btnxxlargeround:hover{
                background-color: white;
                color: black;
            }
        </style>

    </head>
    <body>
        <header>
            <h1>Animate Filter</h1>
            <a href="index.php"><button class="btnxxlargeround"><h3> Back to IT NANI Web Dev &nbsp;<i class="fa fa-external-link"> </i></h3></button></a>
        </header>

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
                            <p><a class="w3-btn w3-margin w3-right" href="http://localhost/wordpress/index.php/page-d-exemple/rss-favorite-feeds/" target="_blank" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> Visiter</a></p>
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
    </body>
</html>
