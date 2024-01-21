<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = '4013383-4034645-DDVB71ODOLY1CPTGKKD9VAW2UHHOH4FO6U3JHY8RLLKGNDW6OBR93OZ7EZW0K8BE';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $goods = 'ODKURZACZ RĘCZNY BEZPRZEWODOWY SAMOCHODOWY 120W';
    $methodParams = '{
        "order_status_id": "321847",
        "date_add": ' . time() . ',
        "admin_comments": "https://best-price.website/goods2/",
        "phone": "' . $phone . '",
        "currency": "PLN",
        "delivery_fullname": "' . $name . '",
        "delivery_address": "' . $address . '",
        "delivery_country_code": "PL",
        "invoice_fullname": "' . $name . '",
        "invoice_address": "' . $address . '",
        "invoice_country_code": "PL",
        "want_invoice": "0",
        "products": "' . $products . '",
    }';
    $apiParams = [
        "method" => "addOrder",
        "parameters" => $methodParams
    ];

    $curl = curl_init("https://api.baselinker.com/connector.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["X-BLToken: " . $token]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($apiParams));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
} else {
    // Обработка некорректного метода запроса
    echo "";
}
?>

