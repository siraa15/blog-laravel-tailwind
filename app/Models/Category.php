<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name'
    ];
    public function article() {
        return $this->hasMany(Article::class);
    }
}
