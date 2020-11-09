<?php 

include_once "bootstrap.php";

// Delete product
if(isset($_GET['delete'])){
    $user = $entityManager->find('Models\Product', $_GET['delete']);
    $entityManager->remove($user);
    $entityManager->flush();
    // redirect_to_root();
}

print("<pre>Find Product by id: " . "<br>");
// $product = $entityManager->find('Product', 66);
// ... SELECT + WHERE ID
$product = $entityManager->find('Models\Product', 3); // jei naudojame namespaceus 
$product !== NULL ? print $product->getId() . ' ' . $product->getName() : '';
print("</pre><hr>");

print("<pre>Find Product(s) by other property (name): " . "<br>");
// ... SELECT + WHERE Name
$products = $entityManager->getRepository('Models\Product')->findBy(array('name' => 'Batai'));
$products[0] !== NULL ? print $products[0]->getId() . ' ' . $products[0]->getName() : '';
print("</pre><hr>");

print("<pre>Find Product(s) by other property (name): " . "<br>");
$products = $entityManager->getRepository('Models\Product')->findBy(array('name' => 'Batai'));
print("<table>");
foreach($products as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
            . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a></td>"
        . "</tr>");
print("</table>"); 
print("</pre><hr>");

print("<pre>Find Product(s) by other property (name) sorted by another property (id): " . "<br>");
$products = $entityManager->getRepository('Models\Product')->findBy(
    array('name' => 'Batai'),
    array('id' => 'DESC'));
print("<table>");
foreach($products as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            . "<td><a href=\"?delete={$p->getId()}\">DELETE</a></td>" 
            . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a></td>"
        . "</tr>");
print("</table>"); 
print("</pre><hr>");

print("<pre>Find all Products: " . "<br>");
$products = $entityManager->getRepository('Models\Product')->findAll();
print("<table>");
foreach($products as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getName() . "</td>" 
            . "<td><a href=\"?delete={$p->getId()}\">DELETE</a>☢️</td>" 
            . "<td><a href=\"?updatable={$p->getId()}\">UPDATE</a>♻️</td>"
        . "</tr>");
print("</table>"); 
print("</pre><hr>");