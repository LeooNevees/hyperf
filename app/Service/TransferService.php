<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\Transfer;
use App\Repository\TransferRepository;
use Hyperf\DbConnection\Db;

class TransferService
{
    public function __construct(
        private TransferRepository $transferRepository
    ) {
    }

    public function store(array $data): array
    {
        $this->transferRepository->create($data);
        
        return [
            'error' => false,
            'message' => 'Added Transfer',
        ];
    }
}
