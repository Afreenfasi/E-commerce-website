<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Skin Lab</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style_3.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Nunito:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Beauty is in the skin</h1>
                       <p>Flat 50% offer on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger" style="background: #ffcbd3; color:white; border: none;">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/13.jpg" alt="Perfume">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fragrance</p>
                                        <p>Perfume is like a new dress, choose the best.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/10.jpg" alt="Skincare">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Skincare</p>
                                    <p>Be good to your skin with our products.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/3.jpg" alt="Haircare">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Haircare</p>
                                   <p>Split ends? try our products.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/35.jpg" alt="Cosmetics">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cosmetics</p>
                                        <p>A smile is the best makeup any girl can wear.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/36.jpg" alt="Trending">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Trending</p>
                                    <p>Be trendy always.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/38.jpg" alt="Gifts">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Gifts</p>
                                   <p>The manner of giving is worth more than the gift.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer" style="background: #ffcbd3;"> 
               <div class="container" style="color:white;">
               <center>
                   <p>Copyright &copy Skin Lab. All Rights Reserved. | Contact Us: +91 1234567890</p>
                   <p>This website is developed by <a href="" style="color:white;">J.FASILA AFREEN</a></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>