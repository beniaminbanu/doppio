<?php

namespace App\Models;

use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int slide_id
 * @property string locale
 * @property string name
 * @property string description
 */

class SlideTranslation extends Model
{
    use HasTranslations;

    protected $fillable = [
        'slide_id',
        'locale',
        'name',
        'description'
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
