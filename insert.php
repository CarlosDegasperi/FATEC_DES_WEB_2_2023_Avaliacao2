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
        
    $nome = $_POST['nome'];
    $rgcpf= $_POST['rgcpf'];
    $telefone = $_POST['telefone'];
    $escola = $_POST['escola'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $sql = "INSERT INTO cadastro (nome,rgcpf,telefone,escola) VALUES ('$nome','$rgcpf','$telefone','$escola.')";
    
    $conn->exec($sql);

    header("location: index.php");
    
    }
catch(PDOException $e)
    {
    
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;


}
?>