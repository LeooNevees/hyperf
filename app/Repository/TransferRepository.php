<?php

declare(strict_types=1);

namespace App\Repository;

use Hyperf\DbConnection\Db;

class TransferRepository
{
    public function create(array $data): void
    {
        Db::table('transfer')->insert([
            'bank_account_id' => $data['bank_account_id'] ?? 0, 
            'transfer_id' => $data['transfer_id'] ?? 0, 
            'created_at' => $data['created_at'] ?? date('Y-m-d H:i:s')
        ]);
    }
}
