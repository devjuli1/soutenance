<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psy extends Model
{
    use HasFactory;
   protected $fillable=[
    'titre',
    'carriere',
    'specialite-id',
    'user-id',
   ]; 

}
