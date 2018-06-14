<?php

$horario;

if(isset($_POST)){
    $horario = $_POST['horario'];
    $_SESSION['horario_inicial'] = $horario;

    echo "<h5>O horário foi cadastrado com sucesso!</h5>";

    header("refresh:3; url=?pg=inicio");
}
else{
    echo "Erro!";
}

?>