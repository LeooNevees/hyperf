<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id 
 * @property int $bank_account_id 
 * @property int $transfer_id 
 * @property string $type 
 * @property string $value 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Transfer extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'transfer';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['bank_account_id', 'transfer_id'];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'bank_account_id' => 'integer', 'transfer_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
