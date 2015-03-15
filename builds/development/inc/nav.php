<section id="navigation">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo" src="img/plogo2.png" alt="Logo of Portfolio">
                </a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">

                    <?php

                         if ($page === 'portfolio') {
                             echo '<li><a href="index.php">Home</a></li>
                                   <li><a href="index.php#about">About</a></li>
                                   <li class="active"><a href="index.php#work">Portfolio</a></li>';
                         } else {
                             echo '<li><a href="#home">Home</a></li>
                                   <li><a href="#about">About</a></li>
                                   <li><a href="#work">Portfolio</a></li>';
                             $page = "";
                         }
                    ?>

                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div>
</section><!--navigation section end here-->