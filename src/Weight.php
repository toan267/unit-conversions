<?php

namespace Spatie\UnitConversions;
//namespace Spatie\UnitConversions;

class Weight
{
    public function __construct(
        private float $kilograms
    )
    {
    }

    public static function fromKilograms(float $kilograms) : self
    {
        return new static($kilograms);
    }
    public function toLbs() : float
    {
        return $this->kilograms * 2.204623;
    }
}
