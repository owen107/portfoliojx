<?php 
    $pageTitle = "Owen Xu | Front-End Web Developer";
    include('inc/header.php'); 
?>

    <body data-spy="scroll" data-target="#navigation" data-offset="80">


        <section id="home" data-stellar-background-ratio="0.5">
            <div class="parallax-overlay"></div> 
            <div class="home-content text-center">
                <div class="container">
                    <h1 class="slide-logo">Codeon</h1>
                    <div class="main-flex-slider">
                        <ul class="slides">
                            <li>
                                <h1>LET'S WORK TOGETHER</h1>

                            </li>
                            <li>
                                <h1>web design agency</h1>

                            </li>
                            <li>
                                <h1>Clean Modern design</h1>

                            </li>
                        </ul>
                    </div> 
                    <h2 class="slide-btm-text">Codeon FOR DESIGN AGENCIES - BUSINESS AND CORPORATE</h2>
                    <div class="home-arrow-down text-center">
                        <p class="scrollto"><a href="#about" class="btn btn-lg btn-theme-color">let's Start </a></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="about" class="padding-80">

            <?php include('inc/nav.php'); ?> 

            <!--about page content-->
            <div class="about-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>We love what we do?</span></h4>
                        <h2 class="large section-title">About us</h2>
                    </div><!--section heading-->             

                </div><!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-duration="0.3s">
                                <div class="about-box-icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Creative ideas </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.5">
                                <div class="about-box-icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Clean Code</h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end--> 
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.6s">
                                <div class="about-box-icon">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Unique Designs </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.8s">
                                <div class="about-box-icon">
                                    <i class="fa fa-hand-o-up"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Creative Team </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end--> 
                    <div class="about-section-more">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about-more-info wow animated fadeInUp" data-wow-delay="0.3s">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="skills-wrapper wow animated bounceIn" data-wow-delay="0.6s">
                                    <h3 class="heading-progress">Web Design <span class="pull-right">88%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Web Development <span class="pull-right">78%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 78%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Marketing <span class="pull-right">82%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar">
                                        </div>
                                    </div>                    
                                </div>
                            </div>
                        </div>
                         <div class="row easy-pie-chart-row">
                    <div class="col-sm-3 text-center">
                        <div class="progress-circle">

                            <div class="chart" data-percent="95" data-scale-color="#35bdf6">
                                <span>95%</span>
                                <canvas height="120" width="120"></canvas>
                            </div>
                            <p class="progress-text">HTML5 / CSS3</p>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center">
                        <div class="progress-circle">

                            <div class="chart" data-percent="85" data-scale-color="#35bdf6">
                                <span>85%</span>
                                <canvas height="120" width="120"></canvas>
                            </div>
                            <p class="progress-text">WORDPRESS</p>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center">
                        <div class="progress-circle">

                            <div class="chart" data-percent="75" data-scale-color="#35bdf6">
                                <span>75%</span>
                                <canvas height="120" width="120"></canvas>
                            </div>
                            <p class="progress-text">Jquery</p>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center">
                        <div class="progress-circle">

                            <div class="chart" data-percent="89" data-scale-color="#35bdf6">
                                <span>89%</span>
                                <canvas height="120" width="120"></canvas>
                            </div>
                            <p class="progress-text">Photoshop</p>
                        </div>
                    </div>

                </div>

                    </div><!--section about 3 end-->
                </div>
            </div>

            <div class="purchase-now parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="wow animated fadeInLeft" data-wow-delay="0.3s">Using Design as a <strong>Business</strong> Strategy</h1>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-lg btn-theme-color wow animated bounceIn" data-wow-delay="0.6s"> Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--page about content end here-->            
        </section>
        <!--about section end here-->


        <!--our work section start here-->
        <section id="work" class="padding-80">

            <div class="work-section-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>Latest portfolio</span></h4>
                        <h2 class="large section-title">Our work</h2>
                    </div><!--section heading-->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="portfolio-filters text-center">
                                <li class="filter active" data-filter="all">all</li>
                                <li class="filter" data-filter="design">design</li>
                                <li class="filter" data-filter="html">HTML5</li>
                                <li class="filter" data-filter="wordpress">Wordpress</li>
                                <li class="filter" data-filter="seo">Seo</li>
                            </ul><!--.portfolio-filter nav-->

                            <div id="grid" class="row">
                                <div class="mix col-md-4 col-sm-6 design margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img1.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            Web design
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 html margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img2.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            HTML5
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 wordpress design margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img3.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            Wordpress/web Design
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 seo margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img4.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            Seo
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 design margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img5.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            Web design
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 html seo margin-btm-20">
                                    <a href="portfolio-work.php">
                                        <div class="image-wrapper">
                                            <img src="img/sec-img6.jpg" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">

                                        <p>
                                            Html/Seo
                                        </p>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                            </div><!--#grid for filter items-->
                        </div><!--.col-md-12 of portfolio filter-->
                    </div><!--.row-->
                </div><!--.contianer-->
            </div><!--work section 1-->
            <!--testimonials-->
        </section><!--#work-section-->

        <!--our work section end-->

<?php include('inc/footer.php'); ?> 