<?php

namespace Src\Context\Shop\Domain\ValueObject;

class ShopName
{
// private string $shopName;

    /**
     * ShopName constructor.
     * @param string $shopName
     */

    //Por aqui pasaremos los parametros y lo validará
    public function __construct(private string $shopName)
    {
    }


    /**
     * @return string
     */
    public function value(): string
    {
        return $this->shopName;
    }


}
