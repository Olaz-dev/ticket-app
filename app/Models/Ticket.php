<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text_description',
        'text_description',
        'status',
        'priority',
        'categories',
        'labels',
        'agent',
        'file_name',
        'file_name2'
    ];

    public function getUser()
    {
        return $this->belongsToMany(User::class);
    }

    public function assignedAgent()
    {
        return $this->hasOne(User::class,'role_as')->select('1');
    }
}