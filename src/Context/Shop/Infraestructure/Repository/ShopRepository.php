<?php

namespace Src\Context\Shop\Infraestructure\Repository;

use App\Models\Shop;
use Src\Context\Shop\Domain\Contract\ShopRepositoryInterface;
use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;
use \Doctrine\Common\Collections\ArrayCollection;
use Src\Context\Shop\Infraestructure\Transformers\ShopTransformer;
use \Src\Context\Shop\Domain\Entity\Shop as ShopEntity;

class ShopRepository implements ShopRepositoryInterface
{

    public function getAll(): ArrayCollection
    {
        // TODO: Implement getAll() method.
        $shopCollection = new ArrayCollection([]);

        $shops = Shop::all();
        foreach ($shops as $shop){
            $shopCollection->add(ShopTransformer::transform($shop));
        }
        return $shopCollection;
    }

    public function create(ShopName $shopName, ShopPhone $shopPhone, ShopAddress $shopAddress): shopId
    {
        // TODO: Implement create() method.

        $shops = Shop::create([
            'shopname'=>$shopName->value(),
            'shopPhone'=>$shopPhone->value(),
            'shopaddress'=>$shopAddress->value()]);

        $shops->save();
        return new ShopId($shops->id);
    }

    public function update(ShopEntity $shop): ShopId
    {
        // TODO: Implement update() method.

     $updateshop = Shop::findOrFail($shop->ShopId()->value());

     $updateshop->shopName = $shop->Shopname()->value();
     $updateshop->shopPhone = $shop->ShopPhone()->value();
     $updateshop->shopAddress = $shop->ShopAddress()->value();

     $updateshop->save();
     return new ShopId($updateshop->id);
    }
}
