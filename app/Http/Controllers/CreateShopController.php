<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopCreateRequest;
use App\Models\Shop;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Src\Context\Shop\Application\Service\Create\CreateShopCommand;
use Src\Context\Shop\Application\Service\Create\CreateShopService;

class CreateShopController extends Controller
{
    //

    public function __construct(private CreateShopService $createShopService)
    {

    }

    public function handleApi(ShopCreateRequest $request): JsonResponse
    {

        $request->validated();

        $responseCode = Response::HTTP_OK;
        $responseContent = [];
        try {
            $shopId = $this->createShopService->handle(
                new CreateShopCommand(
                    $request->get('shopname'),
                    $request->get('shopaddress'),
                    $request->get('shopPhone'),
                )

            );
            $responseContent['shops'] = Shop::find($shopId->value());

        } catch (\Throwable $exception){
            $responseCode = Response::HTTP_INTERNAL_SERVER_ERROR;
            $responseContent['error'] = $exception->getMessage();
        }
        return new JsonResponse($responseContent, $responseCode);
    }
}
