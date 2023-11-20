<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nwws extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'description',
        'published',
        'author',
        'notes'
    ];
}
