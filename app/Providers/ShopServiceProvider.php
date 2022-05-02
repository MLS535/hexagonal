<?php


namespace App\Providers;
use Src\Context\Shop\Domain\Contract\ShopRepositoryInterface;
use \Illuminate\Support\ServiceProvider;
use Src\Context\Shop\Infraestructure\Repository\ShopRepository;

class ShopServiceProvider extends ServiceProvider
{

        public function register()
        {
          $this->app->bind(ShopRepositoryInterface::class, ShopRepository::class);
        }
}
