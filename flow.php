<?php
$arrColors = ['red','yellow','blue','gray','maroon','brown','green'];
$loggedUser=false;
//count visit
$visits=isset($_COOKIE ['visits'])?$_COOKIE ['visits']:0;
$visits++;
setcookie('visits',$visits);
//choose background color
/*if(isset($_POST['action'])&& $_POST['action']=='changeColor'){
    setcookie('color',$_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}
$color=isset($_COOKIE['color']) ? $_COOKIE['color'] : 'red'; //add inspection for empty string
*/
if (isset($_POST['action'])&& $_POST ['action']=='login'){
    $loggedUser=isValidlogin($_POST['login'], $_POST['password']);
}

if (isset($_POST['action'] )&& isset($_POST['action']) ){
    setcookie('setColor',$_POST['action']);
    $_COOKIE['setColor']=$_POST['action'];
}


$color=isset($_COOKIE['setColor'])?$_COOKIE['setColor']:'green';
echo $color;

echo '<pre>';
var_dump($_POST,$_COOKIE ['setColor'],$visits);
echo '</pre>';

