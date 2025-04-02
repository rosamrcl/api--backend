<?php
define('API_BASE', 'http://localhost//api/api/index.php?option=');

echo '<h1>APLICAÇÃO</h1><hr>';

for($i=0; $i<10;$i++){
    $resultado=api_request('random');

    //verificar a resposta da api
    if($resultado['status']=='ERROR'){
        die('Aconteceu um erro na minha chamada do API - morreu agorinha, AGORINHA MESMO');
    }
    echo "Valor aleatório é: " . $resultado['data'] . "<br>";
}


echo'FINALIZADO'; 


function api_request($option){
    $cliente=curl_init(API_BASE .$option);
    curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
    $response =curl_exec($cliente);
    return json_decode($response,true);
}

?>