<?php

abstract class AbstractComplexCommand implements ComplexCommandInterface
{
    private Complex $complexZ1;

    private Complex $complexZ2;

    private ?Complex $complexZ3;

    public function __construct(Complex $complexZ1, Complex $complexZ2)
    {
        $this->complexZ1 = $complexZ1;
        $this->complexZ2 = $complexZ2;
    }

    protected function getComplexZ1(): Complex
    {
        return $this->complexZ1;
    }

    protected function getComplexZ2(): Complex
    {
        return $this->complexZ2;
    }

    protected function setComplexZ3(Complex $complexZ3): void
    {
        $this->complexZ3 = $complexZ3;
    }

    public function getResult(): ?Complex
    {
        return $this->complexZ3;
    }
}