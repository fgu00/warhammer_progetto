<?php
function connDB($servername, $username, $password, $nameDB){
    return new mysqli($servername, $username, $password, $nameDB);
}
?>