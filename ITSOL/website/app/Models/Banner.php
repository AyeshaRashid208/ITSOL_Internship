<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';
    protected $fillable =[
        'image',
        'title',
        'description',
       
    ];
}
