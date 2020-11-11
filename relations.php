<?php 
include_once "bootstrap.php";

use \Doctrine\Common\Util\Debug;

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// M:1 unidirectional
// print("<pre>");
// $user = $entityManager->find('Models\User', 1);
// print($user->GetAddress()->getAddressValue());
// var_dump($user->GetAddress());
// Debug::dump($user);

// $addr = $entityManager->find('Models\Address', 1);
// Debug::dump($addr);
// print("</pre>");

// 1:1 bidirectional

// print("<pre>");
// $customer = $entityManager->find('Models\Customer', 1);
// Debug::dump($customer);
// Debug::dump($customer->getCart());
// Debug::dump($customer->getCart()->getCustomer());

// $cart = $entityManager->find('Models\Cart', 1);
// Debug::dump($cart);
// Debug::dump($cart->getCustomer());

// print("</pre>"); 
