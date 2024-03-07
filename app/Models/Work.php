<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'works';

    protected $fillable = [
        'first_work',
        'second_work',
        'third_work',
        'fourth_work',
        'first_project',
        'second_project',
        'third_project',
        'fourth_project'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
