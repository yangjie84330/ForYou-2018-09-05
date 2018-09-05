<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="css/headstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/products.css">   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    

  



    <title>products</title>
</head>

<body>
    <div id="document">

    <?php require_once('template/navbar.php'); ?>

        <div id="bg"><img src="images/product_bg.jpg" alt=""></div>
            <div class="clearboth"></div>

        <section>
            <div id="container">
                <h1>Product</h1>

                <div class="products"><a id="single_1" href="images/products/test1-01.png" title="test~~"><img src="images/products/test1-02.png" alt=""/></a></div>
                <div class="products"><a id="single_1" href="images/products/p1-01.jpg" title=""><img src="images/products/p1-02.jpg" alt=""/></a></div>
                <div class="products"><a id="single_1" href="images/products/bigp2.jpg" title=""><img src="images/products/minp2.jpg" alt=""/></a></div>
                <div class="products"><img src="images/people480.jpg"></div>
                <div class="products"><img src="images/people480.jpg"></div>
                <div class="products"><img src="images/people480.jpg"></div>
                <div class="products"><img src="images/people480.jpg"></div>
            </div>  
        </section>
        
           
        <footer> 
            <div class="container">
            <div id="logo"></div> 
            Copyright © 2018 yuen All rights reserved.
            </div>
        </footer>
    </div>   
</body>

  <!-- Add jQuery library -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script>
    $(document).ready(function() {
    $("#single_1").fancybox();
});
</script>
</html>
