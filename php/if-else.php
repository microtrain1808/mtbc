<?php

//initialize 
$label=null;
$color=null;

//Check for GET params
if(!empty($_GET)){
    $color = "#{$_GET['color']}";
}

switch($color){
    case "#rgb25500":
        $color="#990000";
    case "#ff0000":
        $label='red';
        break;
    case "#00ff00":
        $label='green';
        break; 
    case "#0000ff":
        $label='blue';
        break;
    default:
        $label='unknown';
        break;   
}

echo "<div style=\"color:{$color}\">The color is {$label}</div>";