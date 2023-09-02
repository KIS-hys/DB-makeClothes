<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon_address',
    ];

    public function brands() {
        return $this->hasMany(brand::class);
    }
}
