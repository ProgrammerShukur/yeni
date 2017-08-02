<?php
session_start();
$_SESSION['login']=false;
$store=$_POST['store'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$login=false;
$filename = "json.json";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$array=Json_decode($contents);
for($i=0;$i<count(Json_decode($contents));$i=$i+2){
	if(strtolower($array[$i])==strtolower($email) and $array[$i+1]==md5($pass)){
		$login=true;
		$_SESSION['login']=true;
		break;
	}
}
if($login==true){
echo "Giriş uğurludur.";	
}
else{
	echo "Daxil olunan məlumatlar doğru deyil.";	
}



?>