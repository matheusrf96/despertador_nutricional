<?php

function somarTempo() {
    $i = 0;
    foreach (func_get_args() as $time) {
        sscanf($time, '%d:%d', $hour, $min);
        $i += $hour * 60 + $min;
    }
    if ($h = floor($i / 60)) {
        $i %= 60;
    }

    if($h >= 24){
        $h -= 24;
    }
    return sprintf('%02d:%02d', $h, $i);
}

function atualizarDiferenca($dif){
    return somarTempo($dif, '03:00');
}

$horario = $_SESSION['horario_inicial'];
$dif = '00:00';

?>

<h4>Roteiro: </h4>

<?php 
    if(!isset($_SESSION['horario_inicial'])){
        echo "<p class='red-text'>Horário ainda não definido! Defina um horário na aba 'Configurar Roteiro'.</p>";
    }
    else{
?>

<div class="refeicao">
    Café da Manhã: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo $_SESSION['horario_inicial'];
     ?>
</div>
<hr />

<div class="refeicao">
    Lanche da Manhã: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif)); 
    
    ?>
</div>
<hr />

<div class="refeicao">
    Almoço: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif)); 
    ?>
</div>
<hr />

<div class="refeicao">
    Café da Tarde: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
    ?>
</div>
<hr />

<div class="refeicao">
    Lanche da Tarde: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif)); 
    ?>
</div>
<hr />

<div class="refeicao">
    Jantar: 
    <?php 
        if(isset($_SESSION['horario_inicial']))
            echo somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
    ?>
</div>

<?php } ?> <!-- Fecha if/else -->