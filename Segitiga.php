<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Segitiga extends BangunDatar
{
    public function __construct(
        public float $alas,
        public float $tinggi,
        public float $sisiA,
        public float $sisiB,
        public float $sisiC,
    ) {
    }

    public function luas(): float
    {
        return round(0.5 * $this->alas * $this->tinggi, 2);
    }

    public function keliling(): float
    {
        return round($this->sisiA + $this->sisiB + $this->sisiC, 2);
    }
}
