<?php

class SubCommand extends AbstractComplexCommand
{
    public function execute(): SubCommand
    {
        $a1 = $this->getComplexZ1()->getReal();
        $a2 = $this->getComplexZ2()->getReal();
        $b1 = $this->getComplexZ1()->getImaginary();
        $b2 = $this->getComplexZ2()->getImaginary();

        $real      = ($a1 - $a2);
        $imaginary = ($b1 - $b2);

        $this->setComplexZ3(new Complex($real, $imaginary));

        return $this;
    }
}