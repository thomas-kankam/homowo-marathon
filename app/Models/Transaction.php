<?php

namespace App\Models;

use App\Models\Racer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'amount',
        'transaction_code',
        'status',
    ];

    public function racer()
    {
        return $this->belongsTo(Racer::class);
    }
}
