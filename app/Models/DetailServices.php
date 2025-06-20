<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailServices extends Model
{
    use HasFactory;
    protected $table = 'detail_services';

    protected $fillable = [
        'id',
        'sparepart',
        'harga',
    ];
}