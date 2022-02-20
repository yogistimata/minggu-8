<?php 
$jenismobil = [
    ["Tipe mesin" => "Boxer 4 Silinder DOHC, 16 Valve DOHC D-4S Boxer 4 Silinder" ,
    "Kapasitas silinder" => "1.998 cc." ,
    "Diameter x langkah" =>  "86 x 86",
    "Daya maksimum" => "147 / 6800 Kw / rpm." ,
    "Torsi maksimum" => "205 / 6600 Nm / rpm." ,
    "Transmisi" => "6 Speed Automatic /6 Kecepatan M/T." ,
    "Gambar" => "Toyota86.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data jenis mobil</title>
</head>
<body>
 <h1>Data jenis mobil</h1>
 <?php foreach ($jenismobil as $jm):?>
 <ul>
     <li><img src="Img/<?= $jm["Gambar"] ;?>"> 
     </li>
     <h1>
     <li>Tipe mesin       : <?= $jm["Tipe mesin "]?></li>
     <li>Kapasitas silinder       : <?= $jm["Kapasitas silinder"]?></li>
     <li>Diameter x langkah    : <?= $jm["Diameter x langkah"]?></li>
     <li>Daya maksimum    : <?= $jm["Daya maksimum "]?></li>
     <li>Torsi maksimum    : <?= $jm["Torsi maksimum "]?></li>
     <li>Transmisi    : <?= $jm["Transmisi"]?></li>
     </h1>
    
 </ul> 
 <?php endforeach;?>  
</body>
</html>