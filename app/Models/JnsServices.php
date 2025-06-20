<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsServices extends Model
{
    use HasFactory;
    protected $table = 'jns_services';

    protected $fillable = [
        'id',
        'jns_services',
        'keterangan',
    ];
}