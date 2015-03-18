<?php 
    $pageTitle = "TODO Web Applicatoin";
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
                        <h1>Just TODO It</h1>
                        <p>A Simple TODO Web App Using Local Storage</p> 
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
                        <a class="fa fa-arrow-left button" href="aasingle.php"></a>
                        <a class="fa fa-arrow-right button" href="weilabuy.php"></a>
                    </div>
                </div>
                <hr class="margin-btm-40">
                 
                <div class="row" id="project-desc">

                    <div class="col-md-4">
                         <h3>Project Overview</h3>
                         <ul class="overview">
                            <li><i class="fa fa-calendar"></i> November 2014</li>
                            <li><i class="fa fa-user"></i> Individual Project</li>
                            <li><i class="fa fa-desktop"></i> Front End Development</li>
                         </ul>
                         <p>
                             Just TODO It is an simple Todo Web Appliaction that I initially created to manage my personal schedule in daily life. In this small fun projects, I gained valuable experience by trying out some new Front-End techniques. While styling the project, I applied a custom checkbox style, which made the web app look more appealing. Most importantly, I implemented some HTML 5 new features, including local storage and drag and drop, to enhance the interactivity of the web application, making the Todo app even more powerful.
                         </p> 
                    </div>

                    <div class="col-md-8">                       
                         <div class="portfolio-img">
                            <img src="img/todoapp/todoapp1.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>
                </div>

                <div class="row" id="project-section">

                    <div class="col-md-8">
                         <h3 class="hidden-md hidden-lg">Web App Details</h3>                        
                         <div class="portfolio-img">
                            <img src="img/todoapp/todoapp2.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="col-md-4">
                         <h3 class="hidden-xs hidden-sm">Web App Details</h3>
                         <p>
                             Just TODO It is a simple web application that allows users to manage their personal life. In this app, users can add a new todo task, edit the task as well as delete the task. Besides, with the checkbox options, users can easily and quickly mange their checklist. Also, the drag-and-drop interface enables users for quick and easy sorting. Last but not least, the data of the web app could be saved with the local storage provided.
                         </p>

                         <div class="tags">
                            <h3>Tools</h3>
                            <ul class="tag">
                                <li><a>HTML</a></li>
                                <li><a>CSS</a></li>
                                <li><a>Local Storage</a></li>
                                <li><a>Icon Font</a></li> 
                                <li><a>jQuery Plugins</a></li>
                                <li><a>JavaScript (jQuery)</a></li>
                                <li><a>Photoshop</a></li> 
                            </ul>
                         </div>

                         <div id="demo">
                            <a href="http://junxu.me/todowebapp/" class="btn">View Demo</a>
                         </div>
                    </div>
                </div><hr>
    
                <div class="row portfolio-nav">
                    <div class="col-xs-7 col-md-10">
                        <a href="index.php#work" class="btn btn-small back">Back</a>
                    </div>
                    <div class="col-xs-5 col-md-2 nav-btn">
                        <a class="fa fa-arrow-left button" href="aasingle.php"></a>
                        <a class="fa fa-arrow-right button" href="weilabuy.php"></a>
                    </div>
                </div>
            </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 