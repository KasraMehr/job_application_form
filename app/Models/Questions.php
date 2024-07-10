<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'questions';

    protected $fillable = [
        'category',
        'text',
        'first_option',
        'second_option',
        'third_option',
        'fourth_option',
        'answer',
        'comment',
    ];
}
