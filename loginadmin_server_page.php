<?php

include("data_class.php");
$login_email=$_POST['login_email'];
$login_pasword=$_POST['login_password'];

if($login_email==null||$login_pasword==null){


    $emailmsg="";
    $pasdmsg="";
    if($login_email==null){
        $emailmsg="Email Empty";
    }
    if($login_pasword==null)
    {
        $pasdmsg="Password Empty";
    }
    header("Location:index.php?ademailmsg=$emailmsg&adpasdmsg=$pasdmsg");


}

elseif($login_email!=null&&$login_pasword!=null){
    $obj = new data();
    $obj->setconnection();
}