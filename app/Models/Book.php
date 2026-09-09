<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

protected $fillable = ['title', 'genre', 'situation', 'description', 'author_id'];


public function Author()
{
return $this->belongsTo(Author::class);

}

}
