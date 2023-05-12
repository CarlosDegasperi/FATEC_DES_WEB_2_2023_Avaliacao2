<?php

require_once('dados_banco.php');

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['nome']) and validar_post($_POST['rgcpf']) 
and validar_post($_POST['telefone']) and validar_post($_POST['escola'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $rgcpf= $_POST['rgcpf'];
    $telefone = $_POST['telefone'];
    $escola = $_POST['escola'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE cadastro SET nome = '$nome', rgcpf = '$rgcpf' , telefone = '$telefone', escola = '$escola' 
    WHERE id = '$id'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("location: listar.php");
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>
