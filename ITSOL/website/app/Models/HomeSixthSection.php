<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HomeSixthSection extends Model
{
    use HasFactory;
    protected $table = 'homesixthsections';
    protected $fillable =[
        'message',
        'heading',
        'image',
        'reviews',
        'name',
        'designation',
       
    ];
}
