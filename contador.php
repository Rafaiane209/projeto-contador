<?php
function incrementarContador() {
    $arquivo = 'contador.txt';

    // Verifica se o arquivo existe, caso contrário, cria e inicializa com 0
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, 0);
    }

    // Lê o valor atual do contador
    $contador = (int)file_get_contents($arquivo);

    // Incrementa o contado
    $contador++;

     // Salva o novo valor no arquivo
    file_put_contents($arquivo, $contador);

     // Retorna o valor atualizado
    return $contador;
}
?>