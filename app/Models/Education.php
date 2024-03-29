<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'education';

    protected $fillable = [
        'degree',
        'begin',
        'end'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
