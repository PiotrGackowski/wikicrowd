<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuDepictsAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'qu_depicts_id',
        'user_id',
        'answer',
    ];

    public function question()
    {
        return $this->belongsTo(QuDepicts::class, 'qu_depicts_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}