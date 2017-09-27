<?php namespace Redhedded1\Recaptcha\Models;

use Model;

/**
 * Recaptcha Keys Model
 */
class Recaptcha extends Model
{
    public $table = 'recaptcha_keys';
    protected $guarded = [];
    protected $fillable = ['*'];
    public $rules = [
        'site_key' => 'required',
        'secret_key' => 'required'
    ];
}
