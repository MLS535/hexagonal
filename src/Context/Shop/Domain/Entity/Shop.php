<?php


namespace Src\Context\Shop\Domain\Entity;


use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;

class Shop
{

    /**
     * Shop constructor.
     * @param ShopId $shopId
     * @param ShopName $shopname
     * @param ShopAddress|null $shopAddress
     * @param ShopPhone|null $shopPhone
     */
    public function __construct(
        private ShopId $shopId,
        private ShopName $shopname,
        private ?ShopAddress $shopAddress,
        private ?ShopPhone $shopPhone
    )
    {
    }

    /**
     * @return ShopId
     */
    public function ShopId(): ShopId
    {
        return $this->shopId;
    }

    /**
     * @return ShopName
     */
    public function Shopname(): ShopName
    {
        return $this->shopname;
    }

    /**
     * @return ShopAddress|null
     */
    public function ShopAddress(): ?ShopAddress
    {
        return $this->shopAddress;
    }

    /**
     * @return ShopPhone|null
     */
    public function ShopPhone(): ?ShopPhone
    {
        return $this->shopPhone;
    }
    /**
     * Shop constructor.
     * @param string $shopname
     * @param string $shopAddress
     * @param int $shopPhone
     */




}
