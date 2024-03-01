<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\TransferService;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class TransferController
{
    public function __construct(
        private TransferService $transferService
    ) {
    }

    public function store(RequestInterface $request, ResponseInterface $response)
    {
        $retService = $this->transferService->store($request->all());
        
        return $response->raw(json_encode($retService));
    }
}
