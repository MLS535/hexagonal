<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Src\Context\Shop\Application\Service\GetAll\GetAllShopService;
use Src\Context\Shop\Infraestructure\Transformers\ShopTransformer;


class GetAllShopController extends Controller
{
    //

    /**
     * ShopController constructor.
     */
    public function __construct(private GetAllShopService $getAllShopsService)
    {
    }

    public function handleApi(): JsonResponse
    {
        $responseCode = Response::HTTP_OK;
        $responseContent = [];

        try {
            $shops = $this->getAllShopsService->handle();
            $responseContent['shops'] = ShopTransformer::parseResponse($shops);
        } catch (\Throwable $exception) {
            $responseCode = Response::HTTP_INTERNAL_SERVER_ERROR;
            $responseContent['error'] = $exception->getMessage();
        }

        return new JsonResponse($responseContent, $responseCode);

    }


}
