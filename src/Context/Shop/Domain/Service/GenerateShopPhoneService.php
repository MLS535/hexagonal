<?php


namespace Src\Context\Shop\Domain\Service;


use Src\Context\Shop\Domain\ValueObject\ShopPhone;

class GenerateShopPhoneService
{

    public static function randomPhone(): int
    {
        $randomPhone = "";
        $phoneNumbers = [0,1,2,3,4,5,6,7,8,9];
        for ($i = 0; $i < 9; $i++){
            $randomPhone .= $phoneNumbers[rand(0, (count($phoneNumbers) - 1))];
        }
        return $randomPhone;
    }
}
