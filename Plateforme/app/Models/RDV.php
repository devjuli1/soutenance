<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDV extends Model
{
    use HasFactory;
    protected $fillable =[
        'motif_consultation',
        'consultant',
        'email',
        'password',
        'user-id',
    ];
}
