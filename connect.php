<?php

$con = mysqli_connect('localhost','alara', 'Love@life1');

if(!$con){
    echo 'Not connected to server';
}
if(!mysqli_select_db($con,'final_project')){
    echo 'Database Not selected';
}
    $host = "us-cdbr-iron-east-04.cleardb.net";
    $dbName = "heroku_981fc0aa0d1b350";
    $username = "bdc992bb9af150";
    $password = "29b5a64a";
//when connecting from Heroku
    //mysql://bdc992bb9af150:29b5a64a@us-cdbr-iron-east-04.cleardb.net/heroku_981fc0aa0d1b350?reconnect=true
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbName = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    }
$Email = $_POST['email'];
$Name = $_POST['uName'];
$Pswrd = $_POST['pass'];

$sql = "INSERT INTO `project_user` (email,userName,password) VALUES ('$Email','$Name','$Pswrd')";

if(!mysqli_query($con, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Not inserted")';
    echo '</script>';
}
else{
    echo '<script language="javascript">';
    echo 'alert ("Inserted")';
    echo '</script>';
}
header(" url=inventory.html");

$sql = "SELECT `userid`, `email`, `userName`, `password` FROM `project_user` WHERE 1";
$result = mysqli_query($con,$sql);

echo "<table>";
echo "<tr><th>Email</th><th>Username</th><th>Password</th></tr>";

while($row = mysqli_fetch_assoc($result)){
    $email = $row['email'];
    $user = $row['userName'];
    $pass = $row['password'];
     echo "<tr><td style='width: 200px;'>".$date."</td><td style='width: 600px;'>".$comment."</td><td>".$amount."</td></tr>";
}
echo "</table>";
mysqli_close($con);



?>