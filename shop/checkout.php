<?php
// Ensure that this script is accessed through a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get the cart data from the request
    $cartData = json_decode(file_get_contents('php://input'), true);

    // Process the cart data as needed (calculate total price, format message, etc.)
    $totalPrice = calculateTotalPrice($cartData);

    // Prepare the message for WhatsApp API
    $message = "New Order\n";
    foreach ($cartData as $item) {
        $message .= "{$item['name']} x{$item['quantity']} - IDR {$item['price']} K\n";
    }
    $message .= "\nTotal Price: IDR $totalPrice K";

    // Send the message to the WhatsApp API (you need to replace 'YOUR_WHATSAPP_API_ENDPOINT' with the actual endpoint)
    $whatsappApiEndpoint = 'https://wa.me/6285156246202';
    $response = sendMessageToWhatsAppAPI($whatsappApiEndpoint, $message);

    // Return the response to the client
    echo json_encode(['status' => 'success', 'response' => $response]);
} else {
    // If the script is accessed through a method other than POST, return an error
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}

function calculateTotalPrice($cartData) {
    // Implement your logic to calculate the total price from the cart data
    // For simplicity, this example assumes each item has a 'price' property
    $totalPrice = 0;
    foreach ($cartData as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }
    return $totalPrice;
}

function sendMessageToWhatsAppAPI($endpoint, $message) {
    // Implement your logic to send the message to the WhatsApp API
    // Use cURL or any other suitable method
    // Example:
    $data = ['message' => $message];
    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
?>
