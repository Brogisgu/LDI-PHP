<?php
if($_POST["cxnome"] != "")
{
    include_once "factory/conexao.php";
    $nome = $_POST["cxnome"];
    $email = $_POST ["cxemail"];
    $sql = "insert  indo clinte (nome,email) values ('$nome','$email')";
    $query = mysqli_query($conn,$sql);
    echo "Dados gravados com sucesso";
}
else{
    echo "Dados não cadastrados";
}
?>