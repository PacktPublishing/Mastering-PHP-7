<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    header('Content-type: application/json');
    echo json_encode(['data' => 'Triggered customer POST!']);
}

if ('GET' == $_SERVER['REQUEST_METHOD']) {
    header('Content-type: application/json');
    echo json_encode(['data' => 'Triggered customer GET!']);
}

if ('PUT' == $_SERVER['REQUEST_METHOD']) {
    header('Content-type: application/json');
    echo json_encode(['data' => 'Triggered customer PUT!']);
}

if ('DELETE' == $_SERVER['REQUEST_METHOD']) {
    header('Content-type: application/json');
    echo json_encode(['data' => 'Triggered customer DELETE!']);
}
