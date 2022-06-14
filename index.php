<?php

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];

function sortDeliveryMethods(array $deliveryMethodsArray)
{
    $sortedDeliveryMethodsArray = [];

    foreach ($deliveryMethodsArray as $item) {
        foreach ($item['customer_costs'] as $key => $cost) {
            $sortedDeliveryMethodsArray[$key][$item['code']] = $cost;
        }
    }

    return $sortedDeliveryMethodsArray;
}

$result = sortDeliveryMethods($deliveryMethodsArray);
echo '<pre>';
var_dump($result);
echo '/<pre>';
