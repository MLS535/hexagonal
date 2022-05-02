<?php

namespace Src\Context\Shop\Domain\ValueObject;

class ShopPhone
{


    /**
     * ShopPhone constructor.
     * @param int $shopPhone
     */
    public function __construct(private int $shopPhone)
    {
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->shopPhone;
    }



}
