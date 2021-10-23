<?php
function debug($arr) {
    echo '<pre>' .print_r($arr, true). '</pre>'; //для распечатки на экране создали функцию
}
function redirect($http = false){
    if ($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit();
}
