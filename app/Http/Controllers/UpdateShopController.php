<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopCreateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Src\Context\Shop\Application\Service\Update\UpdateShopCommand;
use Src\Context\Shop\Application\Service\Update\UpdateShopService;
use Src\Context\Shop\Domain\Entity\Shop;
use Src\Context\Shop\Domain\ValueObject\ShopAddress;
use Src\Context\Shop\Domain\ValueObject\ShopId;
use Src\Context\Shop\Domain\ValueObject\ShopName;
use Src\Context\Shop\Domain\ValueObject\ShopPhone;
use \App\Models\Shop as ShopModel;

class UpdateShopController extends Controller
{
    //
    public function __construct(private UpdateShopService $updateShopService)
    {
    }

    public function handleApi(ShopCreateRequest $request, $id): JsonResponse
    {

        $request->validated();

        $responseCode = Response::HTTP_OK;
        $responseContent = [];
        try {
            $shopId = $this->updateShopService->handle(
                new UpdateShopCommand(
                    new Shop(new ShopId($id),
                        new ShopName($request->get('shopname')),
                        new ShopAddress($request->get('shopaddress')),
                        new ShopPhone($request->get('shopPhone')),
                    )

                )

            );
            $responseContent['shops'] = ShopModel::find($shopId->value());

        } catch (\Throwable $exception){
            $responseCode = Response::HTTP_INTERNAL_SERVER_ERROR;
            $responseContent['error'] = $exception->getMessage();
        }
        return new JsonResponse($responseContent, $responseCode);
    }
}
