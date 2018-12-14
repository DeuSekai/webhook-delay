<?php

function sendMessage($parameters) {
    echo json_encode($parameters);
}

$update_response = file_get_contents("php://input");
$update          = json_decode($update_response, true);

    //4 seconds delay
    sleep(10);
    sendMessage(array(
            "source" => $update["responseId"],
            "fulfillmentText"=>NULL,
            "payload" => array(
                "items"=>[
                    array(
                        "simpleResponse"=>
                    array(
                        "textToSpeech"=>"Bad request"
                         )
                    )
                ],
                ),
           
        ));

?>
