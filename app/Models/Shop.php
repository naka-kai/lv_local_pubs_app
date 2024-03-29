<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * @property string name
     * @property string postcode
     * @property string prefecture
     * @property string city
     * @property string street
     * @property string image
     * @property string tel
     * @property string sns
     */
    use HasFactory;

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
