<?php
//if-else-if version
$score=80;
if($score<40){
    echo"you failed";
} else if($score>=40 && $score<60){
    echo"you passed";
} else if($score>=60 && $score<80){
    echo"you did well";
} else{
    echo"you did great";
}



//switch-case version
switch($score){
    case $score<40:
        echo"you failed";
        break;
    case $score>=40 && $score<60:
        echo"you passed";
        break;
    case $score>=60 && $score<80:
        echo"you did well";
        break;
    default:
        echo"you did great";
}