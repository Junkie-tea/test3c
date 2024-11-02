<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['name', 'text'];

    public function questions() {
        return $this->hasMany(Answer::class, '');
    }
}
