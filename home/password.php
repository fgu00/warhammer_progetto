<?php
include "conn.php";
echo "benvenuto in password";
echo "<form action='POST'>
inserisci la mail che hai collegato al account<input type'text' name='password'>
</form>"
$conn=connDB("";"root","password","");
$comando="SELECT FROM database FROM password WHERE password='$_POST[password]'";
$conn->querry($comando);
if($conn->connect_error){
echo "connesione instabile ricontrollare la connesione";
}else{
if($conn==$_post['password']){
    $receivers ="$_POST['password']";
    $oggeto="recupero password";
    $message="   
     <html>
    <head>
        <title>recupero password </title>
    </head>
    <body>
        <h1></h1>
        <p>La tua password è $conn .</p>
    </body>
</html>
';"
mail($conn,$oggeto,$message);
}
}

?>