<html>

<?php
/**
 * Created by IntelliJ IDEA.
 * User: matias
 * Date: 30/1/17
 * Time: 11:55 PM
 */

error_reporting(E_ALL);

//$address = "0.0.0.0";
$address = "192.168.0.57";
$port1 = 1024;
$port2 = 1026;

if(!($sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP)))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}
echo "A";
$port = $port1;
$sockBind = socket_bind($sock,$address,$port);
if(!$sockBind){
    //$port = $port2;

    $sockBind = socket_bind($sock,$address,$port);
}

$errorcode = socket_last_error();
$errormsg = socket_strerror($errorcode);
echo $port;
echo $sockBind;
echo $errorcode;
echo $errormsg;
//die("Couldn't create socket: [$errorcode] $errormsg \n");
echo $sockBind;
flush();
ob_flush();
exit();


//flush();
//ob_flush();

if($sockConn) {
    $i == 0;
    while ($i == 0) {
        echo socket_read($sock, 1024) . "<br />";
        flush();
        ob_flush();
        //$i++;

    }
}

socket_close($sock);
?>


</html>
