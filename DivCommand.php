<?php

class DivCommand extends AbstractComplexCommand
{
    public function execute(): DivCommand
    {
        $a1 = $this->getComplexZ1()->getReal();
        $a2 = $this->getComplexZ2()->getReal();
        $b1 = $this->getComplexZ1()->getImaginary();
        $b2 = $this->getComplexZ2()->getImaginary();

        $real      = ($a1 * $a2 + $b1 * $b2) / (pow($a2, 2) + pow($b2, 2));
        $imaginary = ($b1 * $a2 - $a1 * $b2) / (pow($a2, 2) + pow($b2, 2));

        $this->setComplexZ3(new Complex($real, $imaginary));

        return $this;
    }
}