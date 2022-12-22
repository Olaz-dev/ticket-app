<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'text_description',
        'text_description',
        'status',
        'categories',
        'labels',
        'agent',
        'file_name',
        'file_name2'
    ];
}