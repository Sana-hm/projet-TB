<?php

// var_dump($_FILES);
$product_name = $_POST['nproduit'] ;
$product_id = $_POST['code'] ; 

$orig_file = $_FILES["produit"]["tmp_name"];
$extension = substr(strrchr($_FILES["produit"]["name"], "."), 1);
$target_dir = 'uploads/';
$destination = "$target_dir$product_name$product_id.$extension";
move_uploaded_file($orig_file,$destination);





?>