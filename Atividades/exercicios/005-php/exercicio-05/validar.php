<?php 

$erro = false;
if ( !isset( $_POST ) || empty( $_POST ) ) {
    $erro = 'Nada foi postado.';
}


foreach ( $_POST as $chave => $valor ) {
    $$chave = trim( strip_tags( $valor ) );
    if ( empty ( $valor ) ) {
        $erro = 'Existem campos em branco.';
    }
}

if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
    $erro = 'A idade deve ser um valor numérico';
}

if ( $erro ) {
    echo $erro;
} else {
    echo "<h1> Erro nos dados enviados</h1>";
    foreach ( $_POST as $chave => $valor ) {
        echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
    }
}