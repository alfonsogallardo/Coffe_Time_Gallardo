<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = ['category_id', 'name' , 'description', 'price'];

    public function category () {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
