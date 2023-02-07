<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;

/**
 * @property string image
 * @property int order
 * @property boolean status
 */

class Slide extends Model
{
    use HasTranslations;

    protected $fillable = [
        'image',
        'status',
        'order'
    ];

    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public function getUpdatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
