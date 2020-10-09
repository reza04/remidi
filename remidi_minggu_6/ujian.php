<?php

$transportasi=[
    
    ["Bus","Bejeu",230000,"01.jpg"],
    ["Bus","Shantika",210000,"03.jpg"],
    ["Bus","Haryanto",250000,"02.jpg"],

    ["Pesawat","Lion Air",1500000,"04.jpg"],
    ["Pesawat","Garuda",2500000,"05.png"],
    ["Pesawat","Air Asia",2000000,"06.jpg"],
    
    ["Kapal","Kapal Pesiar",10000000,"07.jpg"],
    ["Kapal","Kapal Feri",250000,"08.webp"],
    ["Kapal","Kapal Cepat",500000,"09.jpg"]
    
    ];

// $temp_arr=[];
// foreach($transportasi as $key)
// {
//     echo $temp_arr=$key[0].$key[1].$key[2].$key[3].PHP_EOL;
// }

$temp_arr=[];
foreach($transportasi as $key)
{
    $temp_arr[]=$key[0];
}

$menu=array_unique ($temp_arr);

// print_r($menu);

foreach($menu as $s)
{
    echo PHP_EOL.$s;
}

