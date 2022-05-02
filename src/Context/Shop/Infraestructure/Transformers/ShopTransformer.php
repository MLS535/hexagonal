<?php

namespace Src\Context\Shop\Infraestructure\Transformers;

use App\Models\Shop;
use Src\Context\Shop\Domain\Entity\Shop as ShopEntity;
use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;

class ShopTransformer
{
    public static function transform(Shop $shopModel): ShopEntity
    {
        return new ShopEntity(
            new ShopId($shopModel->id),
            new ShopName($shopModel->shopname),
            new ShopAddress($shopModel->shopaddress),
            new ShopPhone($shopModel->shopPhone)
        );
    }

    public static function parseResponse($shops): array
    {
        $arrayShop = [];
        foreach ($shops as $shop) {
            $arrayShop[] = (ShopTransformer::fromEntityToArray($shop));
        }
        return $arrayShop;
    }

    public static function fromEntityToArray(ShopEntity $shopEntity): array
    {
        return array([
            "ShopId" => $shopEntity->ShopId()->value(),
            "ShopPhone" => $shopEntity->ShopPhone()->value(),
            "ShopAddress" => $shopEntity->ShopAddress()->value(),
            "ShopName" => $shopEntity->Shopname()->value(),

        ]);
    }
}
