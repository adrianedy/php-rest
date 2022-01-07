<?php

$limit = (int) url_query('limit') ?? 10;

$filter = [];
$rated = url_query('rated');
$countries = url_query('countries');
$languages = url_query('languages');

if ($rated) {
    $filter['rated'] = $rated;
}

if ($countries) {
    $filter['countries'] = $countries;
}

if ($languages) {
    $filter['languages'] = $languages;
}

$cursor = db_collection('movies')->find(
    $filter,
    [
        'limit' => $limit,
    ]
);

echo json_encode(['data' => $cursor->toArray()]);