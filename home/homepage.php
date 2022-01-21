<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    </body>
</html>

<?php

echo"<form align='center' heigth='500px' method='POST'>
<div>
</br>
<font color='white'size='4'>inserisci il tuo nickname <input type='text'  name='nick'></font></br>
</br>
<font color='white' size='3'>inserisci la tua password <input type='text' name='pass'></font></br>
</br>
<input type='submit' value='accedi' >

</form>";

echo "<form align='center' action='nuovo_utente.php'>
<input type='submit' value='nuovo utente' >
<br>
</from>";

echo "<form align='center' action='password.php'>
<input type='submit' value='password dimenticata' >
<br>
</from>
</div> ";
   
?>