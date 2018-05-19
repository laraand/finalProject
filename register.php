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
                <strong> Lopez Bakery</strong>
            </h1>
        </header>
        <div class="topnav">
            <hr width= "50%" />
            <a href= "index.php" >Home</a>
            <a href= "inventory.html">Inventory</a>
            <a href= "register.php">Register</a> 
        </div>
        <form action="connect.php" method="post">
            Email: <input type="text" name="email" /><br><br>
            Username: <input type="text" name="uName"/><br><br>
            Password: <input type = "password" name="pass"/><br><br>
            
            <input type = "submit" />
        </form>
    </body>
    <footer>
        <font size="3", color="orange">Internet Programming. 2018 &copy; Lara</font>
    </footer>
     </html>
        