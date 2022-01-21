<html>
    <head>
    <link href="utente.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    </body>
</html>

<?php
echo "<form action='homepage.php'>
<input type='submit'value='home'>
</form>";

echo"<form align='center' method='POST'>
<font color='white'size='4'>inserisci il nome <input type='text'  name='nome'></font></br>
<font color='white'size='4'>inserisci il  cognome <input type='text'  name='cnome'></font></br>
<font color='white'size='4'>inserisci l'indirizzo email <input type='text'  name='email'></font></br>
<font color='white'size='4'>inserisci il nickname <input type='text'  name='nick'></font></br>
<font color='white'size='4'>inserisci la password <input type='text'  name='pass'></font></br>
<font color='white'size='4'>conferma la password <input type='text'  name='pass2'></font></br>
</form>";
if($_POST['pass']==$_POST['pass2']){
echo "afo";
}else{
echo "le password non coincidono";
}
?>