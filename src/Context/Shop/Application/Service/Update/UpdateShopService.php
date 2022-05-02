<?php


namespace Src\Context\Shop\Application\Service\Update;


use Src\Context\Shop\Application\Service\Create\CreateShopCommand;
use Src\Context\Shop\Domain\Entity\Shop;
use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;
use Src\Context\Shop\Infraestructure\Repository\ShopRepository;

class UpdateShopService
{
    public function __construct(private ShopRepository $shopRepository)
    {

    }

    public function handle( UpdateShopCommand $updateShopCommand): ShopId {

        return $this->shopRepository->update(
            new Shop( new ShopId($updateShopCommand->shop()->ShopId()->value()),
                new ShopName($updateShopCommand->shop()->Shopname()->value()),
                new ShopAddress($updateShopCommand->shop()->ShopAddress()->value()),
                new ShopPhone($updateShopCommand->shop()->ShopPhone()->value()))
        );

    }
}
