<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = '2024_schedules';
    protected $fillable = [
        'name',
        'date',
        'link',
        'status',
        'color',
        'icon',
    ];
}
