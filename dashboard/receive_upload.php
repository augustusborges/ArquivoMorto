<?php
echo "<script> alert('UPLOAD - entrada'); </script>";
$uploaddir = $_SERVER['DOCUMENT_ROOT']."/daab/intranet/uploads/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo carregado corretamente.\n";
    echo "Detalhes do arquivo:\n";
    print_r($_FILES);

} else {
    echo "Upload falhou!\n";
    echo "Mais informações de debug:\n";
    print_r($_FILES);

}


print "</pre>";

?>
