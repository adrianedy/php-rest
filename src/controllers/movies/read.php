<?php

$limit = (int) url_query('limit') ?? 10;

$cursor = db_collection('movies')->find(
    [],
    [
        'limit' => $limit,
    ]
);

echo json_encode(['data' => $cursor->toArray()]);