<?php

$_APP_requests = false;

function request($name) {
    global $_APP_requests;
    if ($_APP_requests === false) {
        parse_str(file_get_contents('php://input'), $_APP_requests);
    }
    if (is_null($_APP_requests)) {
        return null;
    }
    return isset($_APP_requests[$name]) ? $_APP_requests[$name] : null;
}

function url_query($name) {
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

