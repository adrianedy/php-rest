<?php

post('/comments' , 'src/controllers/comments/create.php');
put('/comments/$id' , 'src/controllers/comments/update.php');
delete('/comments/$id' , 'src/controllers/comments/delete.php');

get('/movies' , 'src/controllers/movies/read.php');

http_response_code(404);
echo json_encode(['message' => 'Not Found']);