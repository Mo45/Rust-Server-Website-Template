<?php
class discordFunc {

function sendMSG($message,$username,$useremail,$userid,$steamurl,$steamava){
//=======================================================================================================
// Create new webhook in your Discord Server settings and copy&paste URL
//		Server Settings -> Integrations -> Webhooks -> New Webhook
//=======================================================================================================

$webhookurl = "YOUR_WEBHOOK_URL";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    // You can find your Discord User ID here -> https://krasin.space/discord/, replcae to get notified when someone send you message!
    "content" => "New message from website! <@REPLACE_WITH_YOUR_DISCORD_USER_ID>",
    // Username
    //"username" => $sitename,

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://rust.krasin.space/img/rust_icon.png",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            //"title" => "PHP - Send message to Discord (embeds) via Webhook",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => $message,

            // URL of title link
            //"url" => $steamurl,

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "3366ff" ),

            // Footer
            "footer" => [
                "text" => $username,
                "icon_url" => $steamava
            ],

            // Image to send
            //"image" => [
                //"url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=600"
            //],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            //"author" => [
                //"name" => "krasin.space",
                //"url" => "https://krasin.space/"
            //],

            // Additional Fields array
            "fields" => [
                // Field 1
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
                // Etc..
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