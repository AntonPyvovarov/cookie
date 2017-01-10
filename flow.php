<?php
$arrColors = ['red','yellow','blue','gray','maroon','brown','green'];
$loggedUser=false;
//count visit
$visits=isset($_COOKIE ['visits'])?$_COOKIE ['visits']:0;
$visits++;
setcookie('visits',$visits);
if (isset($_POST['action'])&& $_POST ['action']=='login'){
    $loggedUser=isValidlogin($_POST['login'], $_POST['password']);
}

if (isset($_POST['action'] )&& isset($_POST['action']) ){
    setcookie('setColor',$_POST['action'],time()+60*5);
    $_COOKIE['setColor']=$_POST['action'];
}
$color=isset($_COOKIE['setColor'])?$_COOKIE['setColor']:'green';
echo $color;

echo '<pre>';
var_dump($_POST,$_COOKIE ['setColor'],$visits);
echo '</pre>';

