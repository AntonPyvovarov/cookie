<?php
/**
 * @return bool
 */
function isSetColor(){
    if(isset($_COOKIE['setColor'])&&$_COOKIE['setColor']==true){
        return true;
    }
        return false;
}