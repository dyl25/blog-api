<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailStatus extends Model
{
    use HasFactory;

    const PENDING_STATUS = 'pending';
    const SUCCESS_STATUS = 'success';
    const ERROR_STATUS = 'error';

    protected $casts = [
        'sent_at' => 'datetime',
    ];

    public static function getStatus(): array {
        return [
            self::PENDING_STATUS,
            self::SUCCESS_STATUS,
            self::ERROR_STATUS,
        ];
    }
}
