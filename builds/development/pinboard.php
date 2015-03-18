<?php 
    $pageTitle = "Pin Boards";
    $page = "portfolio";
    include('inc/header.php'); 
?>

    <body data-spy="scroll" data-target="#navigation" data-offset="75">

    <?php include('inc/nav.php'); ?> 

       <section class="portfolio_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                      <div class="port delay-01s animated fadeInDown wow animated">
                        <h1>Pin Boards</h1>
                        <p>User Interface Design For A Pinterest Clone Rails Application</p> 
                      </div>  
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12"><img src="img/macbook-pro.png" class="delay-03s animated wow tada" alt="Photo of Flat MacBook"></div>
                </div>
            </div> 
        </section>
        
        <section id="work-single" class="padding-40">
            <div class="container">
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="weilabuy.php"></a>
                        <a class="fa fa-arrow-right button" href="ecommerce.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">

                 
                <div class="row" id="project-desc">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>

                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> January 2015</li>
                            <li><i class="fa fa-group"></i> Team Project</li>
                            <li><i class="fa fa-desktop"></i> User Interface Design</li>
                         </ul>

                         <p>
                             The Pin Boards Web Application was a ruby on rails based team project that I recently worked with a developer. The the project aimed at building a pinterest clone application, which provides an online social platform for people to share their exciting photos as a pin with others. In this project, I mainly designed and developed the User Interface for this web application. Basically, the Front End of the web app is built with HTML, SASS, Boostrap, jQuery as well as a Ruby templating language - HAML.
                         </p>

                         <div class="tags">
                            <h3>Tools</h3>
                            <ul class="tag">
                                <li><a>HTML</a></li>
                                <li><a>CSS</a></li>
                                <li><a>Sass</a></li>
                                <li><a>Balsamiq</a></li>
                                <li><a>Photoshop</a></li>
                                <li><a>JavaScript (jQuery)</a></li>
                                <li><a>HAML</a></li>
                            </ul>
                         </div>

                         <div id="demo">
                            <a href="http://pinboards.herokuapp.com" class="btn">View Demo</a>
                         </div>
                         
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-slide">
                             <ul class="slides">
                                 <li>
                                     <img src="img/pinboard/pinb1.png" class="img-responsive" alt="Photo of Home Page">
                                 </li>
                                   <li>
                                     <img src="img/pinboard/pinb2.jpg" class="img-responsive" alt="Photo of Single Pin Page">
                                 </li>
                                   <li>
                                     <img src="img/pinboard/pinb3.jpg" class="img-responsive" alt="Photo of New Pin Page">
                                 </li>
                             </ul>
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div><hr>

                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="weilabuy.php"></a>
                        <a class="fa fa-arrow-right button" href="ecommerce.php"></a>
                    </div>
                </div>
                
        </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 