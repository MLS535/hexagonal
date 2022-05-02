<?php


namespace Src\Context\Shop\Domain\ValueObject;


class ShopId
{

    /**
     * ShopId constructor.
     * @param int $ShopId
     */
    public function __construct(private int $ShopId)
    {

    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->ShopId;
    }



}
