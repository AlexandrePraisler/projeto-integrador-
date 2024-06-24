<?php
    require("../../../Users/ALEXAN~1/AppData/Local/Temp/Rar$DIa8768.13148/conecta.tst.php");

    $nome = $_POST['nome'];
    $sobrenome =  $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $LinkedIn = $_POST['LinkedIn'];
    $carreira = $_POST['carreira'];
    $senioridade = $_POST['senioridade'];
    $norma1 = $_POST['norma1'];
    $norma2 = $_POST['norma2'];
    $norma3 = $_POST['norma3'];
    $norma4 = $_POST['norma4'];
    $norma5 = $_POST['norma5'];
    $norma6 = $_POST['norma6'];
    $norma7 = $_POST['norma7'];
    $experiencia = $_POST['experiencia'];

    $sql = "INSERT INTO tst (nome, sobrenome, sexo, email, LinkedIn, carreira, senioridade, experiencia )
    VALUES ('$nome', '$sobrenome', '$sexo', '$email', '$LinkedIn', '$carreira', '$norma1', , '$senioridade', , '$norma2' , '$norma3' , '$norma4', '$norma5', '$norma6', '$norma7''$experiencia')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>