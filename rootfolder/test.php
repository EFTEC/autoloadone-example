<?php



echo "<h1>It is a test of AutoLoadOne</h1>";
echo "First: you must run the code <a href='generate.php'>generate.php</a><br><hr>";

include 'autoload.php';
// simple
$obj=new \example\folder\SomeClass();
\example\folder\SomeClass::functionstatic();

// one file, multiple classes
$obj2=new \example\folder2\Class1();
$obj3=new \example\folder2\Class2();

// multiple classes in the same folder and sharing the same namespace (ideal case)
$cus=new \example\erp\Customer();
$prod=new \example\erp\Products();
$invoice=new \example\erp\Invoice();
$invoiceDetail=new \example\erp\subfolder\InvoiceDetail();

// external
$external=new \external\somenamespace\ClassExternal();



