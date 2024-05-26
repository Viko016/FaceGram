<?php
/*--Lo comenté para hacer las pruebas--*/
/*function UserExist($UserName,$File){
    $i=0;
    $fileOpen = fopen($File,"r");
    while(($fila = fgetcsv($fileOpen)!=false)){//Obtenemos los datos del archivo
        if($fila[$i]==$UserName){//pasamos por cada fila 0 = fila 1
            return true;
        }
        $i+1;
    }
    fclose($fileOpen);
    return false;
}

$user = $_POST["usuario"];

$fileUser= "BaseDatosMegaSeguraSinTroanos.csv";

if(file_exists($fileUser)==false){
    $fp=fopen($fileUser,"a+");
    fclose($fp);
}
if(UserExist($user,$fileUser)){
    echo "<script> alert(\"Ese usuario ya existe\")</script>";
    header("Location: PagPrinAskMe.html");
}
else{
    $fp=fopen($fileUser,"a+");
    fwrite($fp,$user."\r\n");
    fclose($fp);
    header("Location:PagInicioAskMe.html");
}*/
$user = $_POST["usuario"];
header("Location:http://localhost/AskMe/PagInicioAskMe.html");
header("Set-Cookie: CookiePrueba=$user; Secure; Path=/; SameSite=None; Partitioned;");






?>
