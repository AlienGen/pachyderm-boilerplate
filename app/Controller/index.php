<?php

$dispatcher->get('/', function() {
    return [200, ['success' => true, 'message' => 'API is alive!']];
});

