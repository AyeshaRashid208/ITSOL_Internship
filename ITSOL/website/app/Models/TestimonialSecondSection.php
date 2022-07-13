<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TestimonialSecondSection extends Model
{
    use HasFactory;
    protected $table = 'testimonialsecondsections';
    protected $fillable =[
        
        'image',
        'reviews',
        'name',
        'designation',
       
    ];
}
