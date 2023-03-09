<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Racer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname' => 'required',
        'age' => 'required',
        'region' => 'required',
        'nationality' => 'required',
        'race_category' => 'required',
        'transaction_id' => 'required',
    ];

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
