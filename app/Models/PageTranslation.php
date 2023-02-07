<?php

namespace App\Models;

use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int page_id
 * @property string locale
 * @property string slug
 * @property string seo_title
 * @property string name
 * @property string short_description
 * @property string description
 */

class PageTranslation extends Model
{
    use HasTranslations;


    protected $fillable = [
        'page_id',
        'locale',
        'slug',
        'seo_title',
        'seo_description',
        'name',
        'short_description',
        'description'
    ];
}
