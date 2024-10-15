<?php


$upload = "img/";
$upload_file = $_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], $upload . $upload_file);


header('Location: ' . 'photos.php');