<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class post extends Model
{

    public $timestamps = false;
    use HasApiTokens, HasFactory, Notifiable;


}
