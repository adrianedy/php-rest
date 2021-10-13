<?php

db_collection('comments')->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID(get_route_parameter('id'))],
    [
        '$set' => [
            'name' => request('name'),
            'email' => request('email'),
            'text' => request('text'),
        ],
    ]
);

echo json_encode(['data' => new stdClass]);
