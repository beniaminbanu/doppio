<?php

namespace App\Models;

use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property string image
 * @property boolean status
 * @property int order
 * @property Carbon published_at
 */

class Article extends Model
{
    use HasTranslations;

    protected $fillable = [
        'image',
        'status',
        'order',
        'published_at'
    ];

    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public function getUpdatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public function getPublishedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }
}
