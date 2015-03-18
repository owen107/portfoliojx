<?php 
    $pageTitle = "D&J Ecommerce Website";
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
                        <h1>D&J Ecommerce Store</h1>
                        <p>A PHP Laravel Based eCommerce Website</p> 
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
                        <a class="fa fa-arrow-left button" href="pinboard.php"></a>
                        <a class="fa fa-arrow-right button" href="weatherapp.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">
                 
                <div class="row" id="project-desc">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>

                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> December 2014 - Present</li>
                            <li><i class="fa fa-group"></i> Team Project</li>
                            <li><i class="fa fa-desktop"></i> Web Development</li>
                         </ul>

                         <p>
                             The D&J eCommerce Web Store is a Capstone project that I have been working with recently. The purpose of this capstone project is to build a fully functional integrated eCommerce website from scratch on the basis of popluar PHP Laravel framework. Currently, we have already completed serveal user interfaces of the website, such as home page, category page and product page. In this process, we took initially to create a reusable UI components styleguide so that it could be shared among designer and developers. The next step of the project would be to add advanced user interactions and implement the backend functionality of the eCommerce application, including faceted filters search engine, shopping cart and the Paypal express checkout. 
                         </p>
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-img">
                            <img src="img/ecommerce/d&j_responsive.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div>

                <div class="row" id="project-section">

                    <div class="col-md-8">
                         <h3 class="hidden-md hidden-lg">Web App Details</h3>                       
                         <div class="portfolio-img">
                            <img src="img/ecommerce/d&j2.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="col-md-4">
                         <h3 class="hidden-xs hidden-sm">Web App Details</h3>
                         <p>
                             The home page of the eCommerce website is mainly designed for demostrating the latest infomation regarding the products. In the category page, user can further refine and look for particular products by utilizing facet filters in the sidebar section. Most importantly, specific details of each product would be provided in the product page, including thoroughly detailed product descriptions, clear call-to-actions and appealing product photos. Beyond that, the Front-End of the website is built within Susy2 framework, which will be fully responsive on multiple viewports and devices, enhancing the user experience.
                         </p>

                         <div class="tags">
                            <h3>Tools</h3>
                            <ul class="tag">
                                <li><a>HTML</a></li>
                                <li><a>CSS</a></li>
                                <li><a>Sass (Compass)</a></li> 
                                <li><a>Photoshop</a></li> 
                                <li><a>jQuery Plugins</a></li>
                                <li><a>JavaScript (jQuery)</a></li>
                                <li><a>PHP (Laravel)</a></li>
                                <li><a>Responsive Web Design</a></li>
                                <li><a>Icon Font</a></li>  
                            </ul>
                         </div>
                    </div>

                </div><hr>
    
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="pinboard.php"></a>
                        <a class="fa fa-arrow-right button" href="weatherapp.php"></a>
                    </div>
                </div>

            </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 