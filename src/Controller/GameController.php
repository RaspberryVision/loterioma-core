<?php

namespace App\Controller;

use App\Model\DTO\Network\NetworkRequest;
use App\NetworkHelper\Core\DataStoreHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/game")
 */
class GameController extends AbstractController
{
    /**
     * @Route("/", name="core_game_process")
     * @param Request $request
     * @return JsonResponse
     */
    public function process(Request $request): JsonResponse
    {
        // if win -> process
        // send to bank - update amounts

        var_dump($request->get('kozak'));exit();
        // save round in db
        $networkResponse = $dataStoreHelper->storeRound($request->getContent());

        return $this->json([
            'message' => $networkResponse->getBody(),
        ]);
    }
}
