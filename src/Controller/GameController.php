<?php

namespace App\Controller;

use App\Model\DTO\Network\NetworkRequest;
use App\NetworkHelper\Core\DataStoreHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/game")
 */
class GameController extends AbstractController
{
    /**
     * @Route("/", name="core_game_process")
     * @param DataStoreHelper $dataStoreHelper
     * @return JsonResponse
     */
    public function process(DataStoreHelper $dataStoreHelper): JsonResponse
    {
        // if win -> process
        // send to bank - update amounts


        // save round in db
        $networkResponse = $dataStoreHelper->storeRound(
            new NetworkRequest('/rounds', 'POST', uniqid('lm_', true), [
                'status' => 1,
                'results' => [1, 1, 1]
            ])
        );

        return $this->json([
            'message' => $networkResponse->getBody(),
        ]);
    }
}
