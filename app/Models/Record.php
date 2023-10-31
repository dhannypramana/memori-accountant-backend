<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'type',
        'about',
        'amount',
        'date'
    ];
}
