<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HomeThirdSection extends Model
{
    use HasFactory;
    protected $table = 'homethirdsections';
    protected $fillable =[
        'message',
        'heading',
        'main_title',
        'sub_title',
        'description',
       
    ];
}
