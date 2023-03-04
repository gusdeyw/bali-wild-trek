<?php

include "dbconnect.php";


if (isset($_POST['image'])) {
   $imagetostr = $_POST['image'];
   $id_image = $_POST['id'];
   mysqli_query($koneksi, "UPDATE activity SET images = '$imagetostr' WHERE id= $id_image");
   echo "Success Update";
   exit();
}

// if(count($allImage) > 0){

//    foreach($allImage as $img){
//         $array_image[] = $img;
//    }
//    $array_image = implode(", ", $array_image);
//    mysqli_query($koneksi,"UPDATE property_list SET images=".$array_image." WHERE id=".$_GET['id']);
//    echo 1;
//    exit;
// }else{
//    echo 0;
//    exit;
// }
