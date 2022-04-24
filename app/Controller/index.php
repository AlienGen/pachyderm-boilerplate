<?php

$dispatcher->get('/', function () {
    return [200, ['success' => true, 'message' => 'API is alive!']];
});

$dispatcher->get('/{param}', function ($param) {
    return [200, ['success' => true, 'message' => 'Data passed by path variable', 'param' => $param]];
});

$dispatcher->post('/new', function ($data) {
    return [200, ['success' => true, 'message' => 'Data passed by body content', 'data' => $data]];
});
