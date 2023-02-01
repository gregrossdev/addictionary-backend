<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    use HasFactory;

    protected $fillable = ['term_id', 'definition'];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
