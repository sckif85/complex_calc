<?php

interface ComplexCommandInterface
{
    public function execute(): ComplexCommandInterface;

    public function getResult(): ?Complex;
}