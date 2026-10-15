<?php
// for loop
// for($i=1; $i<5;$i++){
//     echo "Hello Mr. Judah <br>";
// }

// for($i=1;$i<=10; $i++){
//     echo $i . "<br>";
// }

// for($i=1;$i<10; $i++){
//     if($i%2==0){
//         echo $i."<br>";
//     }
// }

// for($i=2; $i<=10;$i+=2){
//     echo $i."<br>";
// }

// for($i=10; $i>0;$i-=2){
//     echo $i."<br>";
// }

// $total=0;
// for($i=0;$i<5;$i++){
// echo "$i + $total =".($total+$i)."<br>";
// $total=$total+$i;
// }

// while loop
// $i=1;
// while($i<=5){
//     echo $i."<br>";
//     $i++;
// }

// $i=1;
// $sum=0;

// while($i<=5){
// $sum+=$i;
// $i++;
// }
// echo $sum;
// $i=40;
// while($i<=20){
//  echo $i."<br>";
//     $i+=2;
// }


// do-while loop
// do{
//     echo $i."<br>";
//     $i++;
// }while($i<10);

// foreach loop
$students=['lola','bola','tola','fola'];

foreach($students as $student){
    echo $student. "<br>";
}


$product=[
    'id'=>90,
    'name'=>'money',
    'bla'=>'blaaablaaa'
];

foreach($product as $key => $value){
    echo"$key=>$value"."<br>";
}