<!DOCTYPE html>
<html>
    <!--head -->
    <head>
        <meta charset="utf-8" />
        <title>Lopez Bakery</title>
        <link href="CSS/styles.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    </head>
    <!-- body -->
    <body>
        <header>
            <h1>
                <strong>Lopez Bakery</strong>
            </h1>
            
        </header>
        <div class="topnav">
            <hr width= "50%" />
            <a href= "index.php" >Home</a>
            <a href= "inventory.html">Inventory</a>
            <a href= "register.php">Register</a> 
        </div>
        <text><center> Lopez bakery began as a sell from home bakery back in 2013.<br> The beginig was rough as we began to create our base of customers.<br>
               There after it has been uphill, we pride ourselves in stifying our cutomers 
               and ensuring their requirements are met.<br><br><br><br></center></text>
       
       <center> <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="slide" style="max-width:500px">
          <img class="mySlides" src="/finalProject/imgs/1.jpg" style="width:100%">
          <img class="mySlides" src="/finalProject/imgs/2.jpg" style="width:100%">
          <img class="mySlides" src="/finalProject/imgs/3.jpg" style="width:100%">
          <img class="mySlides" src="/finalProject/imgs/4.jpg" style="width:100%">
          <img class="mySlides" src="/finalProject/imgs/5.jpg" style="width:100%">
        </div>
       
        
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 6000); // Change image every 10 seconds
            }
        </script></center>
 
    </body>
    <footer>
        <font size="3", color="orange">Internet Programming. 2018 &copy; Lara</font>
    </footer>
        
</html>
        