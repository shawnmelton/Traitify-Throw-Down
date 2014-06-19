<?php
class TestController {
    public function index() {
        JSONResponse::send(json_encode(array('status' => 'ok')));
    }
}