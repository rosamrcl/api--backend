<?php
define('API_BASE', 'http://localhost//api/api/index.php?option=');
echo '<h1>APLICAÇÃO</h1><hr>';

$resultado=api_request('status');
echo'<pre>'; // <pre> traz a informação do array mais organizada 
print_r ($resultado);

function api_request($option){
    $cliente=curl_init(API_BASE .$option);
    curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
    $response =curl_exec($cliente);
    return json_decode($response,true);
}

?>