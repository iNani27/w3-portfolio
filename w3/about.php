<?php
include_once 'view/inc/meta.php';
?>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidenav/menu -->
    <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding-large" title="close menu">×</a>
            <img src="view/img/isabelleNaniSqR.png" style="width:43%;" class="w3-round"><br><br>
            <h4 class="w3-padding-0"><b>Isabelle</b>&nbsp;<span class="w3-animate-right"><b>NANI</b>&nbsp;</h4>
            <p><span class="w3-animate-opacity w3-text-grey">Web Developer PHP SQL</span></p>
        </div>

        <a href="about.php" class="w3-padding w3-text-teal">ABOUT</a> 
        <a href="index.php" class="w3-padding">PORTFOLIO</a>

        <!-- Modal form contact - begin -->
        <?php
        include_once 'view/inc/modal.php';
        ?>  
        <!-- Modal form contact - end -->



        <!--
            <div class="w3-section w3-padding-top w3-large">
                <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
                <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
                <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
                <a href="#" class="w3-hover-white w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
                <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
            </div>
        -->

        <div class="w3-section w3-padding-top w3-large">
            <a href="https://www.linkedin.com/in/isabelle-nani-b5aa7746" target="_blank" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/iNani27" target="_blank" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-github"></i></a>
        </div>
    </nav>



    <!-- Overlay effect when opening sidenav on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">
        <span id="top" title="scrollToTop"></span>

        <!-- Header -->
        <header class="w3-container">
            <a href="#"><img src="view/img/isabelleNaniSqL.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <h1 class="w3-animate-opacity w3-font-3 w3-text-teal w3-lobster font-effect-brick-sign"><b>Looking for PHP SQL Web Dev ?</b></h1>
            <p>I'm a proactive team player, with eyes for details, and abilities to resolve technical issues, I’m willing to develop 
                dynamic websites coded in PHP and SQL, including the latest user interface technologies
            </p>
            <div class="w3-section w3-bottombar w3-padding-16">

                <a href="about.php#work"><button class="w3-btn"> Work </button></a>

                <a href="about.php#educ"><button class="w3-btn"> Education</button></a>
                <a href="about.php#skills"><button class="w3-btn"> Skills</button></a>
            </div>
        </header>

        <!-- scrollToTop -->
        <p>
            <a href="about.php#top" id="scrollToTop" class="w3-btn-floating w3-ripple w3-teal w3-tiny w3-right"> <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        </p>

        <!-- Work -->
        <div class="w3-container w3-margin-bottom">
            <div class="w3-card-4">
                <div class="w3-container w3-white">
                    <h2><a id="work"></a>WORK EXPERIENCE</h2>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2015</b></p>
                        </div>
                        <div class="w3-rest w3-container w3-margin-bottom">
                            <p class="w3-text-teal">
                                <b>
                                    Web Developer (internship) - Cocof <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://www.spfb.brussels/" title="spfb"> Service Public Francophone Bruxellois <i class="w3-tiny fa fa-external-link"> </i></a>
                                </b>
                            </p>
                            <p>Project: DG COMM – intranet, internet, photo gallery, portal unions</p>
                            <ul>
                                <li>Creation of website, articles, pages, gallery, FAQ, forms</li>
                                <li>Creation of DB users with grants and WordPress users with restrictions & roles</li>
                                <li>Design of the Gallery & the WordPress Child theme</li>
                            </ul>
                            <p class="w3-text-teal">CMS WordPress, Joomla, Drupal 7 - FTP - phpMyAdmin – PHP - CSS - jQuery </p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2014</b></p>
                        </div>
                        <div class="w3-rest w3-container w3-margin-bottom">
                            <p class="w3-text-teal">
                                <b>Web Master & Web Editor – NOVACOMM – Ausy | Dataflow
                                </b>
                            </p>
                            <p>Project: DG COMM – intranet migration in SharePoint</p>
                            <ul>
                                <li>Inventory of all pages to migrate and of all links</li>
                                <li>Reorganisation of the architecture of content and documents</li>
                                <li>Architecture creation in SharePoint 2010: pages, folders</li>
                                <li>Design of new pages, HTML5 - CSS3 cutting</li>
                                <li>Migration of pages: code improvements, links repairs</li>
                            </ul>
                            <p class="w3-text-teal">SharePoint 2010 - FTP - HTML5 - W3C - Microsoft Visual Studio</p>

                            <p>Project: European Institutions Portal
                                <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://europa.eu/index_en.htm" title="Europa"> EUROPA <i class="w3-tiny fa fa-external-link"> </i></a></b>
                            </p>
                            <ul>
                                <li>Accessibility and SEO Improvements</li>
                            </ul>
                            <p class="w3-text-teal">ActiveStandards</p>
                        </div>

                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2008-2014</b></p>
                        </div>
                        <div class="w3-rest w3-container w3-margin-bottom">
                            <p class="w3-text-teal"><b>Web Quality Officer & Web Master – INTRASOFT International </b></p>
                            <p>Project: DG Environment – Sfep
                                <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://ec.europa.eu/environment/integration/research/newsalert/index_en.htm" title="Science for Environment Policy"> Science for Environment Policy <i class="w3-tiny fa fa-external-link"> </i></a>
                            </p>
                            <ul>
                                <li>Weekly updates (static website)</li>
                                <li>HTML page creation</li>
                            </ul>
                            <p class="w3-text-teal">Photoshop – Notepad ++  </p>

                            <p>Project: European Institutions Portal
                                <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://europa.eu/index_en.htm" title="Europa"> EUROPA <i class="w3-tiny fa fa-external-link"> </i></a></b>
                            </p>
                            <ul>
                                <li>Set up of architecture, site creation, integration,  XSL association, publication in CMS </li>
                                <li>Creation of templates : Editorial integration, workflow, best practice, documentation</li>
                                <li>Integration & Quality check (XML, HTML, link_group, XSL label translation)</li>
                                <li>Editorial checking and corrections of multilingual links</li>
                                <li>Quality control after development : Cross browsers and devices checks</li>
                                <li>QC reporting, coordination of corrections for integrators and follow-up</li>
                                <li>W3C & IPG Compliance Improvements</li>
                            </ul>
                            <p class="w3-text-teal">Documentum CMS - FTP - Web Link Validator - XML spy</p>

                            <p>Project: European legislation – Summaries of EU legislation 
                                <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://europa.eu/legislation_summaries/index_en.htm" title="Summaries of EU legislation"> Summaries of EU legislation <i class="w3-tiny fa fa-external-link"> </i></a>
                            </p>
                            <ul>
                                <li>Massive translations integration (HTML, XML) and Quality Check</li>
                                <li>Editorial checking and corrections of multilingual links</li>
                            </ul>
                            <p class="w3-text-teal">WYSIWYG Editor - XML spy - Linky</p>

                            <p>Project: European Commission – European Commission News 
                                <a class="w3-btn w3-hover-teal w3-margin w3-right" target="blank" href="http://ec.europa.eu/index_en.htm" title="European Commission News"> European Commission News <i class="w3-tiny fa fa-external-link"> </i></a>
                            </p>
                            <ul>
                                <li>Daily updates</li>
                            </ul>
                            <p class="w3-text-teal">Documentum CMS – FTP</p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>1983-2007</b></p>
                        </div>
                        <div class="w3-rest w3-container w3-margin-bottom">
                            <p class="w3-text-teal"><b>Artistic career: painter, interior designer, street scenographer & event coordinator, ballet dancer, musician</b></p>
                            <p>North parade 2000 co-scenographer
                                <a class="w3-btn w3-hover-teal w3-right" target="blank" href="http://2000.zinneke.org/p1c.htm" title="Zinneke Parade - Le Mariage de Mimouna">Zinneke Parade | <em>Le Mariage de Mimouna</em>  <i class="w3-tiny fa fa-external-link"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education -->
        <div class="w3-container w3-margin-bottom">
            <div class="w3-card-4">
                <div class="w3-container w3-white">
                    <h2><a id="educ"></a>EDUCATION</h2>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2016</b></p>
                        </div>
                        <div class="w3-rest w3-container">
                            <p>Dutch - CVO Lethas (Brussels)</p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2014-2015</b></p>
                        </div>
                        <div class="w3-rest w3-container">
                            <p>Web Developer – PHP | SQL | AJAX | jQuery | HTML5 | CSS3 – CF2m (Brussels)
                                <a class="w3-btn w3-hover-teal w3-right" target="blank" href="http://www.cf2m.be/portfolio/web1/" title="Isabelle NANI @ CF2m">Portfolio de formation Web DEV  <i class="w3-tiny fa fa-external-link"></i></a></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2014</b></p>
                        </div>
                        <div class="w3-rest w3-container">
                            <p>Drupal CMS – CogniTic (Brussels)</p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2013</b></p>
                        </div>
                        <div class="w3-rest w3-container">
                            <p>HTML5 | CSS3 | jQuery – Cefora (Brussels)</p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>2007-2008</b></p>
                        </div>
                        <div class="w3-rest w3-container">
                            <p>Web support assistant (Web Master) – Interface 3 (Brussels)</p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col w3-container" style="width:20%"><p><b>1983-2007</b></p>
                        </div>
                        <div class="w3-rest w3-container w3-margin-bottom">
                            <p>Artistic background </p>
                        </div>
                    </div>
                </div>
            </div>
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
