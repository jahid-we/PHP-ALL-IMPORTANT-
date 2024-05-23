<?php
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    function getColor()
    {
        return $this->color;
    }
    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x %02x %02x");
        } else {
            list($this->red, $this->green, $this->blue) = [0, 0, 0];
        }
    }

    public function getArryRGB()
    {
        return [$this->red, $this->green, $this->blue]."\n";
    }
    public function getReadRGB()
    {
        printf("red   : {$this->red}\ngreen : {$this->green}\nblue  : {$this->blue}\n");
    }
    public function getRed()
    {
        return $this->red."\n";
    }
    public function getGreen()
    {
        return $this->green."\n";
    }
    public function getBlue()
    {
        return $this->blue."\n";
    }
}
$objcolor = new RGB("#fff001f55");
$objcolor->getReadRGB();
// print_r($objcolor->getArrayRGB());
// echo $objcolor->getRed();
// echo $objcolor->getGreen();
// echo $objcolor->getBlue();
