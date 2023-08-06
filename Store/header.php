<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Nunito:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar navabar-fixed-top"  style=" background-color: #ffcbd3; height: 70px;">
               <div class="container">
                
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                           <span class="icon-bar" style="color: white; background-color: white;"></span>
                           <span class="icon-bar" style="color: white; background-color: white;"></span>
                           <span class="icon-bar" style="color: white; background-color: white;"></span>
                       </button>
                       <a href="index.php" class="navbar-brand" style="font-family: 'arial narrow', cursive;
font-family: 'Nunito', sans-serif; color: white;">Skin Lab</a>

                   </div>

                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"  style="color:white;"><span  style="color:white;" class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"  style="color:white;"><span  style="color:white;" class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>
        
    </body>

</html>