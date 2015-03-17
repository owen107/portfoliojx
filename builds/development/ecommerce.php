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
                        <p>A Laravel Based Ecommerce Website</p> 
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
                         <h3>Project Description</h3>
                         <p>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
                         <h3 class="hidden-md hidden-lg">Project Description</h3>                       
                         <div class="portfolio-img">
                            <img src="img/ecommerce/d&j2.jpg" class="img-responsive">
                         </div>
                         <div class="clearfix"></div>    
                    </div>

                    <div class="col-md-4">
                         <h3 class="hidden-xs hidden-sm">Project Description</h3>
                         <p>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                         </p>

                         <div class="tags">
                            <h3>Tools</h3>
                            <ul class="tag">
                                <li><a>HTML</a></li>
                                <li><a>Balsamiq</a></li>
                                <li><a>Photoshop</a></li>
                                <li><a>Sass</a></li>
                                <li><a>CSS</a></li>
                                <li><a>JavaScript (jQuery)</a></li>
                                
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