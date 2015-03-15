<?php 
    $pageTitle = "D&J Ecommerce Website";
    $page = "portfolio";
    include('inc/header.php'); 
?>

    <body data-spy="scroll" data-target="#navigation" data-offset="75">

        <?php include('inc/nav.php'); ?> 

        <section id="page-head-bg">
            <div class="container">
                <h1>Portfolio single</h1>
            </div>
        </section><!--page-head bg end-->
        
        <section id="work-single" class="padding-80">
             <div class="container">
            <div class="row">
                <div class="col-md-12 margin-btm-40">
                    <h5><a href="index.html#work">Back to portfolio</a></h5><hr>
                </div>
            </div>
                 
                 <div class="row">
               
                 <div class="col-md-8 col-md-offset-2 margin-btm-40">
                    
                     <div class="portfolio-slide">
                         <ul class="slides">
                             <li>
                                 <img src="img/sec-img1.jpg" class="img-responsive" alt="">
                             </li>
                               <li>
                                 <img src="img/sec-img2.jpg" class="img-responsive" alt="">
                             </li>
                               <li>
                                 <img src="img/sec-img3.jpg" class="img-responsive" alt="">
                             </li>
                         </ul>
                     </div>
                     <div class="clearfix"></div>
                     
                 </div>
                 <div class="col-md-8 col-md-offset-2">
                     <h3>Portfolio description</h3>
                     <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                 </div>
                             </div>
        </div><!--work detail container--> 
        </section>
      
<?php include('inc/footer.php'); ?> 