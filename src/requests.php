<?php
function fazerChamadaApi($username, $password) {
    $baseUrl = 'https://easyjohnfield-production.up.railway.app/api/';
    $NomeProjeto = 'JonhField';

    $apiUrl = "{$baseUrl}{$NomeProjeto}/Autentificacao?login={$username}&senha={$password}";


    $ch = curl_init($apiUrl);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Easy445277888',
    ]);

    $apiResponse = curl_exec($ch);

    if (!$apiResponse) {
        die('Erro na requisição: ' . curl_error($ch));
    }

    curl_close($ch);

    $Resposta = json_decode($apiResponse, true);
    
    return $Resposta;
}
?>