<?php

namespace App\Models;

use CrossTimeTech\Laravel\EloquentTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string handler_controller
 * @property string handler_view
 * @property string handler_action
 * @property int order
 * @property boolean status
 */

class Page extends Model
{
    use HasTranslations;

    protected $fillable = [
        'handler_controller',
        'handler_view',
        'handler_action',
        'order',
        'status'
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
