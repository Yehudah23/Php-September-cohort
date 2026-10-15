<?php 
// standard array
$user=["Judah","Bolu","Bayo"];
// echo $user[2];

// traditional array
$users= array("Judah","Halleluyah","Faith");
// echo $user[1] . '<br>';

$user[3] = 'Samuel';
$user[1] = 'Halleluyah';
// echo $user[1];

// print_r($user);

//array_methods
array_push($user, 'Faith', 'Lola', 'Bola', 'Yehudah');
// print_r($user);

$last = array_pop($user);
// print_r($user);
// echo $last;

$first = array_shift($user);
// print_r($user);
// echo $first;

array_unshift($user, 'Yehudah', 'Bola', 'Kola');
// print_r($user);

$length = count($user);
$length_count = array_count_values($user);
// echo $length . '<br>';
// print_r($length_count);


// Associative array

$users=["name"=>'Judah',
        "age"=>29,
        "email"=> "judahk065@gmail.com",
         ];

$users=["background"=>"Imo State"];
// echo $users["background"];

$food=array("name"=> "pounded yam",
            "type"=>"swallow",
            "class"=>"water&sugar"
);
// echo $food["class"];

$food['soup'] = 'Abula';

$last = array_pop($food);
// echo $last;

$first = array_shift($food);
// print_r($food);
// echo $first;

$key = 'type';

// echo count($food);
// print_r(array_keys($food));
// print_r(array_values($food));
// print_r(array_key_first($food));
print_r(array_key_exists('classes', $food));
print_r(array_keys($food));
// print_r(array_values($food));
// print_r(array_key_first($food));                                                                                                                                                                                                                                                                                                                                                                                                                                                            \\\



