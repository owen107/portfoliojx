<?php 
    $pageTitle = "Weila Buy";
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
                        <h1>Weila Buy</h1>
                        <p>A Real-time Products Info Web App with AngularJS</p> 
                      </div>  
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12"><img src="img/macbook-pro.png" class="delay-03s animated wow tada" alt="Photo of Flat MacBook"></div>
                </div>
            </div> 
        </section>
        
        <section id="work-single" class="padding-80">
             <div class="container">
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="todoapp.php"></a>
                        <a class="fa fa-arrow-right button" href="pinboard.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">
                 
                <div class="row" id="project-content">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>
                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> February 2015</li>
                            <li><i class="fa fa-user"></i> Individual Project</li>
                            <li><i class="fa fa-desktop"></i> Front End Development</li>
                         </ul>
                         <p>
                             Weila Buy is a dynamic web application that designed for providing users with real-time infomation of selected Best Buy products and store. To be more specific, the web app is built with one of the most popular client side MVC frameworks -- Angular JS while all the data and infomation of the site is dynamically retrieved by utilizing Best Buy API services. In this project, I gained valuable hand-on experience of building rich web application via JavaScript framework and had a deep understanding with respect to the practical use of MVC frameworks.
                         </p>
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-img">
                            <img src="img/weilabuy/wb-responsive.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div>

                <div class="row" id="project-full">
                    
                    <div class="col-md-12">

                         <h3>Web App Details</h3>                       
                         <div class="portfolio-img">
                            <img src="img/weilabuy/wb2.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="wrapper">
                        <div class="col-md-8">  
                          <p>
                             The Home Page of Weila Buy is designed for providing the real-time information of the Top 10 most viewed or trending products at Best Buy. If the users have great interest in a particular product, the product details page could allow them to view  more specific information, including rating, comments as well as the recommendation products. Apart from that, the search engine enables the users to look for the real-time store information in their neighborhood. Finally, the website is built within one of the most popular mobile-first framework -- ZURB Foundation, which will be fully responsive on multiple viewports and devices, highly improving user experience. 
                          </p>
                        </div>

                        <div class="col-md-4">
                            <div class="tags">
                                <h3 class="hidden-md hidden-lg">Tools</h3>
                                <ul class="tag">
                                    <li><a>HTML</a></li>
                                    <li><a>CSS</a></li>
                                    <li><a>AngularJS</a></li>
                                    <li><a>Photoshop</a></li>
                                    <li><a>Foundation 5</a></li>
                                    <li><a>JavaScript</a></li>
                                    <li><a>Icon Font</a></li> 
                                </ul>
                            </div>

                            <div id="demo">
                                <a href="http://junxu.me/weilabuy/" class="btn">View Demo</a>
                            </div>
                        </div> 
                    </div>

                </div><hr>
    
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="todoapp.php"></a>
                        <a class="fa fa-arrow-right button" href="pinboard.php"></a>
                    </div>
                </div>
            </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 