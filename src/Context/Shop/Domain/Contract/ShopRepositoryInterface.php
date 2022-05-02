<?php

namespace Src\Context\Shop\Domain\Contract;

use Src\Context\Shop\Domain\Entity\Shop;
use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;
use \Doctrine\Common\Collections\ArrayCollection;

interface ShopRepositoryInterface
{

    public function getAll(): ArrayCollection;
    public function create(ShopName $shopName ,ShopPhone $shopPhone, ShopAddress $shopAddress): ShopId;
    public function update(Shop $shop): ShopId;


}
