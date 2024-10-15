<?php

$dir = 'img/';
$files = scandir($dir);

for($i=2;$i<count($files);$i++){
    $path = $dir.$files[$i];
    echo  "   <div class='col'>
    <div class='card' style='width: 18rem;'>
  <img src='$path' alt='$path' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$files[$i]</h5>
    </div>
    </div>
</div>

    ";
}

?>