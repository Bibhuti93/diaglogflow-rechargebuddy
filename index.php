<?php 
$method = $_SERVER['REQUEST_METHOD'];
//$msg = "First line of text\nSecond line of text";

// Process only when method is POST
if($method == 'POST'){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);

$equis = $json->result->parameters->any;
$speech=$equis;
//$speech="Hello Bibhuti";


$response = new \stdClass();
$response->speech = $speech;
$response->displayText = $speech;
$response->source = "Alex";

echo json_encode($response);
}
else
{
echo "Method not allowed";
}

?>
