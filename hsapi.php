<?php
    header('Content-Type: application/json; charset=utf-8');
    require_once(__DIR__ . '/modelo/hs.class.php');

    $hs = new HS();
    $json = array();
    $data = file_get_contents("php://input");
    /* $data = ($data); */
    $response = json_decode($data, true);
    $result = $hs->saveHS($data);

    $json['response'] = $response;
    $json['db'] = $result;

    http_response_code(200);
    echo json_encode($json,JSON_PRETTY_PRINT);
?>