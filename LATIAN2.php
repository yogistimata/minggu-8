<?php 
$filem = [
    ["Tanggal rilis" => "28 Juni 2007 (Indonesia)" ,
    "Sutradara" => "Michael Bay" ,
    "Sekuel" =>  "Transformers Revenge of the Fallen",
    "Diadaptasi dari" => "Transformers" ,
    "Bahasa" => " Inggris" ,
    "Sutradara" => "Roberto Orci , Alex Kurtzman , John Rogers" ,
    "Ket" => "Transformers adalah film fiksi ilmiah Amerika yang diangkat dari kisah Transformers tahun 1984. Film ini memadukan CGI dengan laga hidup." ,
    "Gambar" => "Transformers.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data filem </title>
</head>
<body>
 <h1>Data filem yang akan tayang</h1>
 <?php foreach ($filem as $flm):?>
 <ul>
     <li><img src="Img/<?= $flm["Gambar"] ;?>"> 
     </li>
     <h1>
     <li>Tanggal rilis     : <?= $flm["Tanggal rilis"]?></li>
     <li>Sutradara       : <?= $flm["Sutradara"]?></li>
     <li>Sekuel    : <?= $flm["Sekuel"]?></li>
     <li>Diadaptasi dari    : <?= $flm["Diadaptasi dari"]?></li>
     <li>Bahasa    : <?= $flm["Bahasa"]?></li>
     <li>Sutradara   : <?= $flm["Sutradara"]?></li>
     <li>Ket    : <?= $flm["Ket"]?></li>
     </h1>
    
 </ul> 
 <?php endforeach;?>  
</body>
</html>