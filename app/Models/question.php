<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'field',
        'instruction',
    ];

    public function getSection() {
        return $this->hasMany('App\Models\Section');
    }
}
