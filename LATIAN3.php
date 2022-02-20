<?php 
$mahasiswa = [
    ["Nama" => "Yogi Sasmita" ,
    "NIM" => "21520007" ,
    "Jurusan" =>  "Teknologi Informasi",
    "Gambar" => "Yogi.jpeg"
    ],
    
    ["Nama" => "Lia" ,
    "NIM" => "21510007" ,
    "Jurusan" => "Sistem Informasi",
    "Gambar" => "Lia.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data $mahasiswa</title>
</head>
<body>
 <h1>Data mahasiswa</h1>
 <?php foreach ($mahasiswa as $mhs):?>
 <ul>
     <li><img src="Img/<?= $mhs["Gambar"] ;?>"> 
     </li>
     <h1>
     <li>Nama       : <?= $mhs["Nama"]?></li>
     <li>NIM       : <?= $mhs["NIM"]?></li>
     <li>Jurusan    : <?= $mhs["Jurusan"]?></li>
     </h1>
    
 </ul> 
 <?php endforeach;?>  
</body>
</html>