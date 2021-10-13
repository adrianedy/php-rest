<?php

db_collection('comments')->deleteOne(['_id' => new MongoDB\BSON\ObjectID(get_route_parameter('id'))]);

echo json_encode(['data' => new stdClass]);
