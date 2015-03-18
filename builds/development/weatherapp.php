<?php 
    $pageTitle = "Lovely Weather Mobile Web App";
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
                        <h1>Lovely Weather</h1>
                        <p>A Weather Forecast Mobile Web Application</p> 
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
                        <a class="fa fa-arrow-left button" href="ecommerce.php"></a>
                        <a class="fa fa-arrow-right button" href="aasingle.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">
                 
                <div class="row" id="project-desc">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>

                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> October 2014</li>
                            <li><i class="fa fa-user"></i> Individual Project</li>
                            <li><i class="fa fa-desktop"></i> Front End Development</li>
                         </ul>

                         <p>
                            Lovely Weather Mobile Web Application is one of my personal side projects. The initial goal of this project was to create a mobile forecast web application with similar functionalities as the general native weather apps, such as The Weather Channel and Yahoo Weather. Based in jQuery Mobile framework, the user interfaces of the app were built with custom HTML, CSS and JavaScript(jQuery). Utilizing AJAX and API services, the weather infomatoin of selected cities could be displayed dynamically. The weather information for Lovely Weather is being provided by the Forecast.io API, which is a service made by the company behind the Dark Sky radar app that pulls information from 18 different sources.
                         </p> 
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-img">
                            <img src="img/weatherapp/weatherapp1.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div>

                <div class="row" id="project-section">

                    <div class="col-md-8">
                         <h3 class="hidden-md hidden-lg">Mobile Web App details</h3>                        
                         <div class="portfolio-img">
                            <img src="img/weatherapp/weatherapp2.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="col-md-4">
                         <h3 class="hidden-xs hidden-sm">Mobile Web App Details</h3>
                         <p>
                            The main screen is designed for presenting the the current weather and at least 8 days forecast data based on the selected city. A quick tap at the current weather info will show some other great information. Besides, more details regarding future forecasts would be provided for users in the extend forecast section. Futuremore, the app also provides Fahrenheit/Celsius Conversion and Reverse Geocoding features, which could be very handy for users.
                         </p>

                         <div class="tags">
                            <h3>Tools</h3>
                            <ul class="tag">
                                <li><a>HTML</a></li>
                                <li><a>CSS</a></li>
                                <li><a>AJAX</a></li>
                                <li><a>API</a></li>    
                                <li><a>jQuery Mobile</a></li>
                                <li><a>JavaScript (jQuery)</a></li> 
                                <li><a>HTML 5 Geolocation</a></li>
                                <li><a>JSON (JSONP)</a></li>   
                            </ul>
                         </div>

                         <div id="demo">
                            <a href="http://junxu.me/lovelyweather/" class="btn">View Demo</a>
                         </div>
                    </div>
                </div><hr>
    
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="ecommerce.php"></a>
                        <a class="fa fa-arrow-right button" href="aasingle.php"></a>
                    </div>
                </div>
            </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 