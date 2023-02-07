<?php

namespace App\Models;

use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int article_id
 * @property string locale
 * @property string slug
 * @property string seo_title
 * @property string seo_description
 * @property string seo_keywords
 * @property string name
 * @property string author
 * @property string short_description
 * @property string description
 */

class ArticleTranslation extends Model
{
    use HasTranslations;

    protected $fillable = [
        'article_id',
        'locale',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'name',
        'author',
        'short_description',
        'description'
    ];
}
