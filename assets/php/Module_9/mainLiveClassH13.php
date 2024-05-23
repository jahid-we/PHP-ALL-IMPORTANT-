<?php
interface Printable{
    public function print();
    public function getstatus();
}

class Printer implements Printable{
    public function print(){
        echo "Printing...\n";
    }
    public function getstatus(){
        
    }
}

class PaperPrinter implements Printable{
    public function print(){
        echo "Printing using Paper Printer...\n";
    }
    public function getstatus(){
        
    }
}
class PDFPrinter implements Printable{
    public function print(){
        echo "Printing using PDF Printer...\n";
    }
    public function getstatus(){
        
    }
}

class ThreeDprinter implements Printable{
    public function print(){
        echo "Printing using 3D Printer...\n";
    }
    public function getstatus(){
        
    }
}

/* $pdf=new PDFPrinter();
$pdf->print();
 */

function Docprint(Printable $printer){
    $printer->print();
}

$pdf=new PDFPrinter();
Docprint($pdf);


$paper=new  PaperPrinter();
Docprint($paper);

$threeDPrinter=new ThreeDprinter();
Docprint($threeDPrinter);