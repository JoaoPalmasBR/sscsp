<?php 
    include("./connect.php");
    include("./tratamento.php");
    echo "<hr>Passo a passo do tratamento:<hr>";
    $texto = $_POST['text'];
    echo "Texto original: <a style='color: red;'>$texto</a><br>";

    $texto = addslashes($texto);
    echo "Texto ao tratar Aspas: <a style='color: red;'>$texto</a><br>";

    $texto = quotemeta($texto);
    echo "Texto ao tratar dados Meta: <a style='color: red;'>$texto</a><br>";

    $texto = nl2br ($texto);
    echo "Texto ao tratar quebras de linha: <a style='color: red;'>$texto</a><br>";

    $texto = htmlspecialchars($texto,ENT_COMPAT);
    echo "Texto ao tratar Tags HTML: <a style='color: red;'>$texto</a><br>";


    echo "<hr>Texto Final: <a style='color: green;'>$texto</a><br>";

    function enviar($texto, $mysqli) {
        $query = "INSERT INTO `ss_t1g2` (`text`) VALUE (\"$texto\");";
        $mysqli->query($query);
    }

    if ($tratamento){
        enviar($texto, $mysqli);
    } else {
        enviar($_POST['text'], $mysqli);
    }
    echo "<hr><a href='./'>Voltar</a>";