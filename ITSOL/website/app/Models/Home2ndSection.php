<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class home2ndsections extends Model
{
    use HasFactory;
    protected $table = 'home2ndsections';
    protected $fillable =[
        'image',
        'title',
        'description',
       
    ];
}
