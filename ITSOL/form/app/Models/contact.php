<?php

namespace App\Models;
  
use Mail;
use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    //public $fillable = ['size', 'prescription', 'name', 'phone', 'choice', 'time', 'payment', 'data', 'email'];
    /*public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "rashidayesha208@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }*/
}
