<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JapanPostcode extends Model
{
    /**
     * @property string postcode
     * @property string prefecture
     * @property string city
     * @property string street
     */
    use HasFactory;
}
