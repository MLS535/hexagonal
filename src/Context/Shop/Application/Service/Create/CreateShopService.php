<?php


namespace Src\Context\Shop\Application\Service\Create;


use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;
use Src\Context\Shop\Infraestructure\Repository\ShopRepository;

class CreateShopService
{

    public function __construct(private ShopRepository $shopRepository)
    {

    }



    public function handle( CreateShopCommand $createShopCommand): ShopId {

      return $this->shopRepository->create(
            new ShopName($createShopCommand->shopname()),
            new ShopPhone($createShopCommand->shopPhone()),
            new ShopAddress($createShopCommand->shopaddress())
        );

    }


}
