<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }

    //a job can belong to many and have many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Job belongs to an employer
    public function employer()
    {
        return  $this->belongsTo(Employer::class);
    }
}