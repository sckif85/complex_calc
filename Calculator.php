<?php

class Calculator
{
    public function add(Complex $z1, Complex $z2): Complex
    {
        $command = new AddCommand($z1, $z2);
        $this->executeCommand($command);

        return $command->getResult();
    }

    public function sub(Complex $z1, Complex $z2): Complex
    {
        $command = new SubCommand($z1, $z2);
        $this->executeCommand($command);

        return $command->getResult();
    }

    public function mul(Complex $z1, Complex $z2): Complex
    {
        $command = new MulCommand($z1, $z2);
        $this->executeCommand($command);

        return $command->getResult();
    }

    public function div(Complex $z1, Complex $z2): Complex
    {
        $command = new DivCommand($z1, $z2);
        $this->executeCommand($command);

        return $command->getResult();
    }

    private function executeCommand(ComplexCommandInterface $command)
    {
        $command->execute();
    }
}