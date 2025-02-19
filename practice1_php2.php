<?php
/**
 * Calculate the total price of the items in a shopping cart
 * 
 * @param array $items List of items with 'name' and 'price' keys
 * @return float Total price of all items
 */
function calculateTotalPrice(array $items):float {
    $total = 0;
    foreach($items as $item){
        $total += $item['price'];
    }
    return $total;
 }

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total Price: $" . $totalPrice;

/**
 * Perform string manipulations by removing spaces and converting to lowercase.
 * 
 * @param string $input The original string to be mofidy
 * @return string The Modified string without spaces and in lowercase.
 */
function modifyString(string $input): string {
    $removeInputSpaces = str_replace(' ', '', $input);
    $inputToLowerCase = strtolower($removeInputSpaces);

    return $inputToLowerCase;
}

$string = "This is a poorly written program with little structure and readability.";

$modifiedString = modifyString($string);
echo "\nModified String: " . $modifiedString;

/**
 * Check if a number is even or odd
 * 
 * @param int $number The Number to be check
 * @return string The result stating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0){
        return "\nThe Number " . $number . " is even.";
    } else {
        return "\nThe Number " . $number . " is odd.";
    }
}

$num = 42;

$checkNumber = checkEvenOrOdd($num);
echo $checkNumber;
?>
