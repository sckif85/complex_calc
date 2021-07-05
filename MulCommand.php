<?php

class MulCommand extends AbstractComplexCommand
{
    public function execute(): MulCommand
    {
        $a1 = $this->getComplexZ1()->getReal();
        $a2 = $this->getComplexZ2()->getReal();
        $b1 = $this->getComplexZ1()->getImaginary();
        $b2 = $this->getComplexZ2()->getImaginary();

        $real      = ($a1 * $a2) - ($b1 * $b2);
        $imaginary = ($a1 * $b2) + ($a2 * $b1);

        $this->setComplexZ3(new Complex($real, $imaginary));

        return $this;
    }
}