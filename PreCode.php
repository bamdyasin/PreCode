------------------- Database Connection With Server Function -------------------

$ = new mysqli($ser, $us, $pa, $da);

------------- Full Function -------------
<?php
$link = new mysqli($hostname, $hostusername, $hostpassword, $hostdatabasename);
if(isset($link)){
    $dbcon = "Connection .........................OK";
}

require_once('dbcon.php');
?>

------------------- Server connection Function -------------------

