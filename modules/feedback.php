<?php
class discordFunc {

function sendMSG($message,$username,$useremail,$userid,$steamurl,$steamava){

//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "YOUR_WEBHOOK_URL";
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
    // You can find your Discord User ID here -> https://krasin.space/discord/, replcae to get notified when someone send you message!
    "content" => "New message from website! <@REPLACE_WITH_YOUR_DISCORD_USER_ID>",
    "tts" => false,
    "embeds" => [
        [
            "type" => "rich",
            "description" => $message,
            "timestamp" => $timestamp,
            "color" => hexdec( "3366ff" ),
            "footer" => [
                "text" => $username,
                "icon_url" => $steamava
            ],
            "fields" => [
                [
                    "name" => "Name",
                    "value" => $username,
                    "inline" => false
                ],
                [
                    "name" => "E-Mail",
                    "value" => $useremail,
                    "inline" => false
                ],
                [
                    "name" => "SteamID",
                    "value" => $userid,
                    "inline" => false
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );

}//sendMSG

};//discordFunc

//Based on this Gist -> https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c