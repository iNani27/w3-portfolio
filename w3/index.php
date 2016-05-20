<?php
include_once 'view/inc/meta.php';
?>

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
            <img src="view/img/isabelleNaniSqR.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
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
                <a href="#" title="Coming asap">
                    <img src="view/img/summer_style.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Curabitur eleifend nibh mi</b></p>
                    <p>Aliquam in suscipit metus. Proin quis ante in mauris pharetra ornare. Donec varius tortor leo, eget pharetra enim laoreet vel. Proin malesuada nulla sed nisl egestas consectetur. Suspendisse venenatis nibh vitae mauris fringilla egestas. Phasellus sollicitudin ornare hendrerit. Suspendisse eget lectus ut lacus hendrerit venenatis sed quis tortor. Aenean tincidunt elit elit, non accumsan orci maximus quis.</p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/ciel.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Web</b></p>
                    <p>Aenean eleifend finibus nisl. </p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/bott.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Sed mollis mi et felis pulvinar,</b></p>
                    <p>Sed semper neque molestie, eleifend eros nec, consequat nunc. Nam id mauris eu turpis euismod euismod eget quis sem. Morbi a dolor in purus iaculis viverra at vitae odio. Ut non posuere nulla, at lobortis libero. </p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
        </div>

        
      


        <!-- Second Photo Grid-->
       <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/schuiten.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Id pellentesque odio</b></p>
                    <p> Sed mollis mi et felis pulvinar, id venenatis ipsum efficitur. Aliquam molestie diam luctus, rutrum velit eget, accumsan diam. In quis scelerisque massa, condimentum tempus leo. Curabitur scelerisque laoreet dolor, eu ornare diam. Sed ut ullamcorper massa, id pellentesque odio.</p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
           
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" target="_blank">
                    <img src="view/img/prefo.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Site statique | pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/portfolio/web1/"><img width="11%" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m"></a></b></p>

                    <p>Malesuada nulla sit amet, finibus turpis. Pellentesque venenatis augue ipsum.</p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
           
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/monet.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Tempus leo</b></p>
                    <p>Aenean scelerisque leo elit, vel blandit orci accumsan id. Suspendisse porttitor eu ipsum vitae vulputate. Suspendisse laoreet lacus eu convallis rhoncus. Nunc sed leo nunc.</p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
         
        </div>

        <!-- Third Photo Grid-->
         <div class="w3-row-padding">
                <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/interior.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Mauris tempus bibendum ante id venenatis</b></p>
                    <p>Praesent quis nulla venenatis, porttitor ex at, porttitor nisl. Cras diam dolor, varius vitae consequat sit amet, ultrices sed mi. Etiam posuere auctor sodales. Maecenas quis pellentesque leo. Nam finibus elit quis nisi sodales sollicitudin. Curabitur elementum ac leo et dictum.  Nam et sollicitudin sapien. Aenean porta arcu mi, at dictum massa porta ac. Maecenas at felis ornare, malesuada nisl eu, vestibulum libero.</p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
         
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/bs.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Nam orci leo</b></p>
                    <p>Libero nibh, efficitur consequat orci faucibus, blandit venenatis mi. Maecenas at diam aliquam, </p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
             
               
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="#" title="Coming asap">
                    <img src="view/img/since.JPG" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>
                        </b>Aliquam ac molestie nibh</p>
                    <p>Pellentesque mollis sollicitudin ante et tincidunt. Vestibulum eleifend suscipit felis fermentum maximus.  </p>
                    <p><a class="w3-btn w3-margin w3-right" href="#" alt="Bientôt"><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
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
