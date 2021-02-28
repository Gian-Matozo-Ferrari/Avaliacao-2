<?php


    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $pagam = $_POST['pagam']; 

//Correction ERROR in CPF
$CPF = str_replace(" ", "", $CPF);
$CPF = str_replace("-", "", $CPF);
$CPF = str_replace(".", "", $CPF);

$erro = 0;
if(empty($nome)){
    $erro = 1;
    $msg = "Por Favor digite o nome do proprietario.";
}
if($erro){
    echo "<html><body>";
    echo "<p style='text-align:center'>" .$msg. "</p>";
    echo "<p style='text-align: center'><a href='index.php' >VOLTAR </a></p>";
    echo "</body></html>";
}else{
    $servidor = "localhost"; 
    $usuario = "root";
    $senha = "";
    $db = "detran";

    $link = mysqli_connect($servidor, $usuario, $senha, $db);
    if (mysqli_connect_errno()){
        echo "Erro ao conectar ao banco" . mysqli_connect_error();
        exit();
    }
    if(!mysqli_query($link, "INSERT INTO verificacao_de_multa (ID, Placa, Modelo, Ano, Proprietario, CPF, MultaPaga)
     VALUES (NULL, '" .$placa. "', '" .$modelo. "', '" .$ano. "', '" .$nome. "', '" .$CPF. "', '" .$pagam. "')")){
         echo ("Descricao do erro: " .mysqli_error($link));
     }
     mysqli_close($link);
     echo "<html><body>";
    echo"<p style='text-align:center'>Agradecemos o relatorio para pagamento!</p>";
    echo "</body></html>";
}

?>