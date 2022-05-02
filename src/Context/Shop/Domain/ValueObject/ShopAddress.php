<?php

namespace Src\Context\Shop\Domain\ValueObject;
class ShopAddress
{

    /**
     * ShopAddress constructor.
     * @param string $address
     */
    public function __construct(private string $address) { }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->address;
    }




}
