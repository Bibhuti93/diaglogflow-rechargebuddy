<?php 
$method = $_SERVER['REQUEST_METHOD'];
//$msg = "First line of text\nSecond line of text";

// Process only when method is POST
if($method == 'POST'){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);

$user_num_input = $json->result->parameters->any;
$user_num_input_len=strlen($user_num_input);
  
  if($user_num_input_len==10){
    $speech="Thanks ! \nNumber to be recharged is : "+$user_num_input;
  }
  else{
    $speech="Invalid input. Please try again !";
  }

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
