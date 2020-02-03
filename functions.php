<?php
function checkVar($a){
    if (isset($a) AND trim($a) !='' AND is_numeric(trim($a))){
        return trim($a);
    }
    else {
        exit('Problem!!!');
    }

}