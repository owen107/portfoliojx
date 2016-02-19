<?php 
    $pageTitle = "Owen Xu | Front-End Web Developer";
    include('inc/header.php'); 
?>

    <body data-spy="scroll" data-target="#navigation" data-offset="80">


        <section id="home" data-stellar-background-ratio="0.5">
            <div class="parallax-overlay"></div> 
            <div class="home-content text-center">
                <div class="container">
                    <h1 class="slide-logo">Hello there, I am Jun!</h1>
                    <div class="main-flex-slider">
                        <ul class="slides">
                            <li>
                                <h1>I am a Front-End Engineer</h1>

                            </li>
                            <li>
                                <h1>I love web development</h1>

                            </li>
                        </ul>
                    </div> 
                    <h2 class="slide-btm-text">Want to know more about my interests and works?</h2>
                    <div class="home-arrow-down text-center">
                        <p class="scrollto"><a href="#about" class="btn btn-lg">let's Get Started </a></p>
                    </div>
                </div>
            </div>
        </section>

        <?php include('inc/nav.php'); ?> 
        
        <section id="about" class="padding-80">

            <!--about page content-->
            <div class="about-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <h2 class="large section-title">About me</h2>
                    </div><!--section heading-->             

                </div><!--container-->
                <div class="container">
                    <div class="about-section-more">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about-more-info wow animated fadeInUp" data-wow-delay="0.3s">
                                    <p>
                                        Hello, my name is Jun Xu, I'm a Front-End Engineer currently working in San Francisco, CA. Before coming to SF, I gained my master's degree from the University of Michigan where I studied Information Analysis and Retrieval.</br></br>

                                        Speaking of my passions, I am a huge fan of sports. When I am not coding, you can found me running, playing soccer and pingpong with my friends. </br></br>

                                        When I am not out for sports, I usually spend most of time on the Internet and honing my web design and development skills by doing some real world projects. As a Front-End enginneer, I have a strong passion for working with HTML, CSS and JavaScript and am dedicated to building clean, simple and elegant user interfaces for any product. Also, I love building stuff, particularly website and web application and oftetimes excited to learn any new cutting edge web technologies. Beyond that, I enjoy utilizing back-end web development technologies as well, such as NodeJS and PHP, which enable me to build rich and robust web applications from the front-end to the back-end. </br></br>

                                        Feel free to <a id="email" href="mailto:owenxu107@gmail.com">drop me a line</a> if you would like to say hello.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="skills-wrapper wow animated bounceIn" data-wow-delay="0.6s">
                                    <h3 class="heading-progress">Web Development <span class="pull-right">88%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                                        </div>
                                    </div> 
                                    <h3 class="heading-progress">Web Design <span class="pull-right">70%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                                        </div>
                                    </div>                                               
                                </div>

                                <div class="row easy-pie-chart-row">
                                    <div class="col-sm-6 text-center">
                                        <div class="progress-circle">

                                            <div class="chart" data-percent="95" data-scale-color="#47abed">
                                                <span>90%</span>
                                                <canvas height="120" width="120"></canvas>
                                            </div>
                                            <p class="progress-text">HTML5 / CSS3 / Sass</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <div class="progress-circle">

                                            <div class="chart" data-percent="90" data-scale-color="#47abed">
                                                <span>80%</span>
                                                <canvas height="120" width="120"></canvas>
                                            </div>
                                            <p class="progress-text">JavaScript / jQuery</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <div class="progress-circle">

                                            <div class="chart" data-percent="80" data-scale-color="#47abed">
                                                <span>75%</span>
                                                <canvas height="120" width="120"></canvas>
                                            </div>
                                            <p class="progress-text">Angular / React</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <div class="progress-circle">

                                            <div class="chart" data-percent="70" data-scale-color="#47abed">
                                                <span>70%</span>
                                                <canvas height="120" width="120"></canvas>
                                            </div>
                                            <p class="progress-text">Node(ExpressJS) / PostgreSQL</p>
                                        </div>
                                    </div>
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
                            <h1 class="wow animated fadeInLeft" data-wow-delay="0.3s">Interested in my <strong>Portfolio</strong> ?</h1>
                        </div>
                        <div class="col-sm-4">
                            <a href="#work" class="btn btn-lg btn-theme-color wow animated bounceIn" data-wow-delay="0.6s">Let's Check it Out</a>
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
                        <h2 class="large section-title">My Portfolio</h2>
                    </div><!--section heading-->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="portfolio-filters text-center">
                                <li class="filter active" data-filter="all">all</li>
                                <li class="filter" data-filter="design">ui design</li>
                                <li class="filter" data-filter="web">Web App</li>
                                <li class="filter" data-filter="mobile">Mobile Web App</li>
                                <li class="filter" data-filter="php">PHP Laravel</li>
                            </ul><!--.portfolio-filter nav-->

                            <div id="grid" class="row">
                                <div class="mix col-md-4 col-sm-6 php margin-btm-20">
                                    <a href="ecommerce.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/ec.jpg" class="img-responsive" alt="D&J Ecoommerce">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>D&J Ecommerce</strong> - Web App</p>
                                        <span>Web Development</span>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 mobile margin-btm-20">
                                    <a href="weatherapp.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/weather.jpg" class="img-responsive" alt="Lovely Weather">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>Lovely Weather</strong> - Mobile Web App</p>
                                        <span>Front-End Development</span>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 wordpress web margin-btm-20">
                                    <a href="aasingle.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/aa.jpg" class="img-responsive" alt="AA Single Page">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>AA Signle Page</strong> - Web App</p>
                                        <span>Front-End Development</span>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 web margin-btm-20">
                                    <a href="todoapp.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/todo.jpg" class="img-responsive" alt="Simple Todo App">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>Just TODO It</strong> - Web App</p>
                                        <span>Front-End Development</span>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 web margin-btm-20">
                                    <a href="weilabuy.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/wb.jpg" class="img-responsive" alt="Weila Buy">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>Weila Buy</strong> - Web App</p>
                                        <span>Front-End Development</span>
                                    </div><!--.work-desc-->
                                </div><!--work item-->
                                <div class="mix col-md-4 col-sm-6 html design margin-btm-20">
                                    <a href="pinboard.php">
                                        <div class="image-wrapper">
                                            <img src="img/portfolio/pinb.jpg" class="img-responsive" alt="Pin Board">
                                            <div class="image-overlay">
                                                <p>View Detail</p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p><strong>Pin Boards</strong> - Web App</p>
                                        <span>UI Design</span>
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