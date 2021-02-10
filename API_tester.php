<?php 

include 'tools/Log.php';

$url = 'http://localhost/API_request_handler.php';
$data = ['test' => 'succes!'];

$options = [
    'http' => [
        'method' => 'POST',
        'content' => json_encode($data),
        'header' => "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

Log::norm('API_Tester', 'Request sent');

?>