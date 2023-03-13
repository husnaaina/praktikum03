<?php 

// Buat looping 
for($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
}



// Buat looping pertama
echo "<h3> Looping Pertama </h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I LOVE PHP <br>";
}

// Buat looping kedua
echo "<h3> Looping Pertama </h3>";

for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I LOVE PHP <br>";
}

// Buat Array
$buah = ["Anggur","Mangga","Melon"];

foreach($buah as $b) {
    echo $b . "<br>";
}

?>