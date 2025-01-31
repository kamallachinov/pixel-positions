<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;


    //a tag can belong to many and have many jobs
    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}