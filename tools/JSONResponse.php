<?php
class JSONResponse {
    static function send($json) {
        header('Content-Type: application/json');
        echo $json;
        exit;
    }
}