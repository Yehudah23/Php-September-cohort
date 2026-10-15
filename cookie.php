<?php
setcookie("fav_food", "Semo and Egusi",time() + (86400*2),"/");
setcookie("fav_color", "black and blue",time() + (86400*2),"/");
setcookie("fav_movie", "Seven deadly sins",time() + (86400*2),"/");
setcookie("fav_artist", "Hillsong and Jesus culture",time() + (86400*2),"/");
setcookie("fav_book", "The Bible",time() + (86400*2),"/");



foreach($_COOKIE as $key => $value){
 echo "{$key} = {$value} <br>";
}


if(isset($_COOKIE["fav_food"])){
    echo "Buy some{$_COOKIE["fav_food"]} !!!";
} else{
    "You are low on your favorite food";
}