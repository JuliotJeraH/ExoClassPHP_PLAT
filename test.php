<?php 
require_once("Plat.php");
require_once("Client.php");


$Plat1 = new Plat("Tacos", 2, 15000);
$Plat2 = new Plat("Pâtes", 1, 12000);
$Plat3 = new Plat("Salade", 3, 8000);
$Plat4 = new Plat("Pizza", 1, 20000);
$Plat5 = new Plat("Burger", 2, 18000);
$Plat6 = new Plat("Sushi", 1, 25000);

$Client1 = new Client("Rabe", 1);
$Client2 = new Client("Koto", 2);
$Client3 = new Client("Haja", 3);

$Client1->commander($Plat2);
$Client1->commander($Plat3);
$Client1->commander($Plat4);

$Client2->commander($Plat1);
$Client2->commander($Plat5);
$Client2->commander($Plat6);

$Client3->commander($Plat1);
$Client3->commander($Plat2);
$Client3->commander($Plat3);

$Reçu1 = $Client1->resumer();
$Reçu2 = $Client2->resumer();
$Reçu3 = $Client3->resumer();

echo $Reçu1. "<br>";
echo $Reçu2. "<br>";
echo $Reçu3. "<br>";



?>