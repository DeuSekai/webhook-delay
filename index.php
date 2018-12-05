<?php

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if ($method == 'POST') {
    
    $requestBody = file_get_contents('php://input');
    $json        = json_decode($requestBody);
    
    $speech = NULL;
            
    $response              = new \stdClass();
    $response->speech      = $speech;
    $response->displayText = $speech;
    $response->source      = "webhook";
    
    //4 seconds delay
    sleep(4);
    
    echo json_encode($response);
    
} else {
    
    echo "Method not allowed";
    
}

?>
