<?php


namespace Src\Context\Shop\Application\Service\Create;



use Src\Context\Shop\Infraestructure\Repository\ShopRepository;

class CreateShopCommand
{

    /**
     * CreateShopCommand constructor.
     * @param string $shopname
     * @param string $shopaddress
     * @param int $shopPhone
     */
    public function __construct(
                                   private string $shopname,
                                   private string $shopaddress,
                                   private int $shopPhone,
    )
    {
    }

    /**
     * @return string
     */
    public function shopname(): string
    {
        return $this->shopname;
    }

    /**
     * @return string
     */
    public function shopaddress(): string
    {
        return $this->shopaddress;
    }

    /**
     * @return int
     */
    public function shopPhone(): int
    {
        return $this->shopPhone;
    }


}
