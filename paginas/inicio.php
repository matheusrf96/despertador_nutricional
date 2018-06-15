<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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

$hora_atual = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
// $hora_atual = new DateTime('07:30');
echo "Hora Atual: ".date_format($hora_atual, 'H:i');

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
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(date_format($hora_atual, 'H:i') >= $_SESSION['horario_inicial'] && date_format($hora_atual, 'H:i') < somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Café da Manhã: ".$_SESSION['horario_inicial'];
            }
            else{
                echo "Café da Manhã: ".$_SESSION['horario_inicial'];
            }
        }
     ?>
</div>
<hr />

<div class="refeicao">
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(
                date_format($hora_atual, 'H:i') >= somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))
                && date_format($hora_atual, 'H:i') < somarTempo($_SESSION['horario_inicial'], atualizarDiferenca(atualizarDiferenca($dif)))
                ){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Lanche da Manhã: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
            else{
                echo "Lanche da Manhã: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
        }
    ?>
</div>
<hr />

<div class="refeicao">
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(
                date_format($hora_atual, 'H:i') >= somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))
                && date_format($hora_atual, 'H:i') < somarTempo($_SESSION['horario_inicial'], atualizarDiferenca(atualizarDiferenca($dif)))
                ){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Almoço: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
            else{
                echo "Almoço: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
        }
    ?>
</div>
<hr />

<div class="refeicao">
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(
                date_format($hora_atual, 'H:i') >= somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))
                && date_format($hora_atual, 'H:i') < somarTempo($_SESSION['horario_inicial'], atualizarDiferenca(atualizarDiferenca($dif)))
                ){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Café da Tarde: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
            else{
                echo "Café da Tarde: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
        }
    ?>
</div>
<hr />

<div class="refeicao">
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(
                date_format($hora_atual, 'H:i') >= somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))
                && date_format($hora_atual, 'H:i') < somarTempo($_SESSION['horario_inicial'], atualizarDiferenca(atualizarDiferenca($dif)))
                ){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Lanche da Tarde: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
            else{
                echo "Lanche da Tarde: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
        }
    ?>
</div>
<hr />

<div class="refeicao">
    <?php 
        if(isset($_SESSION['horario_inicial'])){
            if(
                date_format($hora_atual, 'H:i') >= somarTempo($_SESSION['horario_inicial'], atualizarDiferenca($dif))
                && date_format($hora_atual, 'H:i') < new DateTime('23:59')
                ){
                echo "<i class='red-text'>Refeição atual</i><br />";
                echo "Jantar: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
            else{
                echo "Jantar: ".somarTempo($_SESSION['horario_inicial'], $dif = atualizarDiferenca($dif));
            }
        }
    ?>
</div>

<?php } ?> <!-- Fecha if/else -->