<?php
    header('Content-Type: application/json; charset=utf-8');
    require_once(__DIR__ . '/modelo/hs.class.php');

    $hs = new HS();
    $json = array();
    $action = $_GET['action'];
    if($action == 'getAllRequest'){
        $result = $hs->getAll();
        $json = $result['data'];    
    }
    http_response_code(200);
    echo json_encode($json,JSON_PRETTY_PRINT);
?>