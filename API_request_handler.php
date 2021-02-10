<?php 

include 'tools/Log.php';


$post_json = file_get_contents('php://input');
$post = json_decode($post_json);
Log::norm('API', $post, 'API');



?>