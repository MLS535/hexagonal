<?php

namespace Src\Context\Shop\Application\Service\GetAll;
use Src\Context\Shop\Infraestructure\Repository\ShopRepository;
use Doctrine\Common\Collections\ArrayCollection;


class GetAllShopService
{


    /**
     * GetAllShopsService constructor.
     */
    public function __construct(private ShopRepository $shopRepository)
    {
    }

    public function handle(): ArrayCollection
    {
        return $this->shopRepository->getAll();
    }
}
