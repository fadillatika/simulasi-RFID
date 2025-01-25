<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfidlogs extends Model
{
    use HasFactory;

    protected $table = 'rfid_logs';

    protected $fillable = [
        'rfid_uid',
        'created_at'
    ];

    public $timestamps = false;
}
