<?php

//if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = $_SERVER['DOCUMENT_ROOT']."/daab/intranet/uploads/";
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
//}

/*
$uploaddir = $_SERVER['DOCUMENT_ROOT']."/daab/intranet/uploads/";
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
//$tempFile = $_FILES['file']['tmp_name'];  

echo "<script> alert('UPLOAD - entrada'); </script>";
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        //if (!empty($_FILES)) {
        //move_uploaded_file($tempFile,$uploadfile); //6
         echo "Arquivo carregado corretamente.\n";
        echo "Detalhes do arquivo:\n";
        print_r($_FILES);

    } else {
        echo "Upload falhou!\n";
        echo "Mais informações de debug:\n";
        print_r($_FILES);
    }

 echo "<script> alert('UPLOAD - saida'); </script>";
*/

?> 