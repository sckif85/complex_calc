<?php

class Complex
{
    private float $real;

    private float $imaginary;

    public function __construct(float $real, float $imaginary)
    {
        $this->real      = $real;
        $this->imaginary = $imaginary;
    }

    public function getReal(): float
    {
        return $this->real;
    }

    public function getImaginary(): float
    {
        return $this->imaginary;
    }

    /**
     * @throws Exception
     */
    static function createByString(string $data)
    {
        return new Complex(...self::parseComplexData($data));
    }

    /**
     * @throws Exception
     */
    private static function parseComplexData(string $data): array
    {
        $real = $imaginary = 0;

        $parts          = [];
        $preparedString = str_replace(' ', '', $data);
        if (!preg_match_all('/^([+-]?\d+[i]?)+$/', $preparedString)) {
            throw new \Exception('WRONG FORMAT OF COMPLEX NUMBER');
        }
        preg_match_all('/[+-]?\d+[i]?/', $preparedString, $parts);

        foreach ($parts[0] as $part) {
            $peaces = [];
            if (!preg_match_all('/([+-]?)(\d+)([i]?)/', $part, $peaces)) {
                throw new \Exception('WRONG FORMAT OF COMPLEX NUMBER PEACES');
            }

            $value = ((empty($peaces[1][0]) || $peaces[1][0] === '+') ? 1 : -1) * (float)$peaces[2][0];
            if ($peaces[3][0] === 'i') {
                $imaginary = $imaginary + $value;
            } else {
                $real = $real + $value;
            }
        }

        return [$real, $imaginary];
    }

    public function __toString(): string
    {
        $data = [];
        if ($this->getReal()) {
            $data[] = $this->getReal();
        }
        if ($this->getImaginary()) {
            $data[] = ($this->getImaginary() > 0 ? '+' . $this->getImaginary() : $this->getImaginary()) . 'i';
        }
        return join($data);
    }
}