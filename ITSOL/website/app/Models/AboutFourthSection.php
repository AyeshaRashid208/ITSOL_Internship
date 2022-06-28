<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AboutFourthSection extends Model
{
    use HasFactory;
    protected $table = 'aboutfourthsections';
    protected $fillable =[
        'title',
        'description',
        'first_heading',
        'first_description',
        'second_heading',
        'second_description',
        'image',
       
    ];
}
