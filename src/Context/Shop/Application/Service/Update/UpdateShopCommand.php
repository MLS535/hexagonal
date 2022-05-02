<?php

namespace Src\Context\Shop\Application\Service\Update;

use Src\Context\Shop\Domain\Entity\Shop;

class UpdateShopCommand
{
    /**
     * CreateShopCommand constructor.
     * @param string $shopname
     * @param string $shopaddress
     * @param int $shopPhone
     */
     public function __construct(
      private Shop $shopEntity
    )
    {
    }


    public function shop()
    {
        return $this->shopEntity;
    }

}
