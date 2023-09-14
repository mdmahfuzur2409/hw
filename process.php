<?php
$name = (trim(strlen($_REQUEST["name"]))); 
$email =  (trim(strlen($_REQUEST["email"]))); 
$number =(trim(strlen (is_numeric(($_REQUEST["number"])))));
$password =(trim(strlen ($_REQUEST["password"])));
$message =(trim(strlen($_REQUEST["message"])));



if($name>50){
echo "Akika diye nam bodlao";
}else{
echo $_REQUEST["name"];
}
 echo "<br>";
if($email>30){
    echo "Invalid Email";
}else{
    echo $_REQUEST["email"];
}echo "<br>";
if ($number==11){
echo "Invalid Your phone number" ;
}else{
  echo  $_REQUEST["number"] ;
}
echo "<br>";
if ($password==8){
    echo $_REQUEST["password"];
    }else{
        echo "Please using 8 Character";
    }
    echo "<br>";
    if ($message>100){
        echo "do no disturbe me";
        }else{
            echo $_REQUEST["message"];
        }
       
   


?>
