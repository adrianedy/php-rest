<?php

db_collection('comments')->insertOne([
    'name' => request('name'),
    'email' => request('email'),
    'movie_id' => new MongoDB\BSON\ObjectID(request('movie_id')),
    'text' => request('text'),
    'created_at' => new MongoDB\BSON\UTCDateTime(time()*1000),
]);

echo json_encode(['data' => new stdClass]);
