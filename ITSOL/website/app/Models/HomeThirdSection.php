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
            'tab_one_name',
            'tab_two_name',
            'tab_three_name',
            'tab_one_heading',
            'tab_one_desc',
            'tab_one_sub_heading_one',
            'tab_one_sub_heading_one_desc',
            'tab_one_sub_heading_two',
            'tab_one_sub_heading_two_desc',
            'tab_one_sub_heading_three',
            'tab_one_sub_heading_three_desc',
            'tab_two_heading',
            'tab_two_desc',
            'tab_two_sub_heading_one',
            'tab_two_sub_heading_one_desc',
            'tab_two_sub_heading_two',
            'tab_two_sub_heading_two_desc',
            'tab_two_sub_heading_three',
            'tab_thr_heading',
            'tab_thr_desc',
            'tab_thr_sub_heading_one',
            'tab_thr_sub_heading_one_desc',
            'tab_thr_sub_heading_two',
            'tab_thr_sub_heading_two_desc',
            'tab_thr_sub_heading_three',
            'tab_thr_sub_heading_three_desc',

       
    ];
}
