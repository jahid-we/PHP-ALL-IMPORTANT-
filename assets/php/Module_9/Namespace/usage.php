<?php

include_once "printer.php";
include_once "pdfPrinter.php";
include_once "metal.php";


$printer=new GenericPrinter\printer();
$printer->print();

$printerpdf= new GenericPrinter\pdfPrinter();
$printerpdf->print();

$metal=new MetalPrinter\printer();
$metal->print();