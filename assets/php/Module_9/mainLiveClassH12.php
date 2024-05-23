<?php
interface Printabley{
    public function print();
}

class Printer implements Printabley{
    public function print(){
        echo "Printing...\n";
    }
}

class PaperPrinter implements Printabley{
    public function print(){
        echo "Printing using Paper Printer...\n";
    }
}
class PDFPrinter implements Printabley{
    public function print(){
        echo "Printing using PDF Printer...\n";
    }
}

class ThreeDprinter implements Printabley{
    public function creat(){
        echo "Printing using 3D Printer...\n";
    }
}

/* $pdf=new PDFPrinter();
$pdf->print();
 */

function Docprint($printer){
    $printer->print();
}

$pdf=new PDFPrinter();
Docprint($pdf);


$paper=new  PaperPrinter();
Docprint($paper);

$threeDPrinter=new ThreeDprinter();
Docprint($threeDPrinter);