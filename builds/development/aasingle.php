<?php 
    $pageTitle = "Ann Arbor Single Page Website";
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
                        <h1>AA Intro Web App</h1>
                        <p>A Responsive Single Page Design For Introducing Ann Arbor</p> 
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
                        <a class="fa fa-arrow-left button" href="weatherapp.php"></a>
                        <a class="fa fa-arrow-right button" href="todoapp.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">
                 
                <div class="row" id="project-content">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>
                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> September 2014</li>
                            <li><i class="fa fa-user"></i> Individual Project</li>
                            <li><i class="fa fa-desktop"></i> Front End Development</li>
                         </ul>
                         <p>
                             The AA Single Page Website is a course project that I created for introduing the city of Ann Arbor, Michigan. Specifically, The single page web app is consisted of five distinct sections, which is attempting to introduce Ann Arbor from different perspectives, including attractions, dining, annual events and fall scenary. In this particular project, I applied Sass, one of the most popular CSS prepocessor, to generate and maintain the stylesheet, which provided me great flexibility to adjust and style the layout of the whole website.
                         </p>
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-img">
                            <img src="img/aasingle/aa-responsive-gold.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div>

                <div class="row" id="project-full">
                    
                    <div class="col-md-12">

                         <h3>Web App Details</h3>                       
                         <div class="portfolio-img">
                            <img src="img/aasingle/aa-macbook-pro.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="wrapper">
                        <div class="col-md-8">  
                          <p>
                             In this single page design, my initial goal was to introdue Ann Abror via appealing visual effects, thus each section in this web application contained attractive high resolution pictures. The primary feature of this web app is animating the scrolling effects that respond to user direction by using ScrollMagic and TweenMax plugins. In addition to that, the Front-End of the website is built within Susy2 framework along with breakpoint, which will be fully responsive on multiple viewports and devices, enhancing the user experience. 
                          </p>
                        </div>

                        <div class="col-md-4">
                            <div class="tags">
                                <h3 class="hidden-md hidden-lg">Tools</h3>
                                <ul class="tag">
                                    <li><a>HTML</a></li>
                                    <li><a>CSS</a></li>
                                    <li><a>Sass (Compass)</a></li>                                    
                                    <li><a>jQuery Plugins</a></li>                                   
                                    <li><a>JavaScript</a></li>
                                    <li><a>Responsive Web Design</a></li><li><a>Photoshop</a></li>
                                </ul>
                            </div>

                            <div id="demo">
                                <a href="http://junxu.me/aasingle/" class="btn">View Demo</a>
                            </div>
                        </div> 
                    </div>

                </div><hr>
    
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="weatherapp.php"></a>
                        <a class="fa fa-arrow-right button" href="todoapp.php"></a>
                    </div>
                </div>
            </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 