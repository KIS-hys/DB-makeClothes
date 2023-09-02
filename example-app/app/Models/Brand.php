<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'category',
        'price',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function icon() {
        return $this->belongsTo(Icon::class);
    }
    public function price() {
        return $this->belongsTo(Price::class);
    }
}
