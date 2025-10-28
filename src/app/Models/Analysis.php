<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    protected $fillable = [
        'ticker','price','avg_50','avg_200','sentiment_score','currency',
        'title','content','sources','status','approved_by','approved_at'
    ];

    protected $casts = [
        'sources' => 'array',
        'approved_at' => 'datetime',
    ];
}
