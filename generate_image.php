<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$prompt = $data["prompt"];

$ch = curl_init("https://api.openai.com/v1/images/generations");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer YOUR API KEY GOES HERE",
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "prompt" => $prompt,
    "n" => 2,
    "size" => "256x256",
]));

$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>