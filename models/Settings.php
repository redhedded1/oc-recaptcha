<?php namespace Redhedded1\Recaptcha\Models;

use Model;


class Settings extends Model
{
    /**
     * implement
     *
     * @var string
     */
    public $implement = ['System.Behaviors.SettingsModel'];
    /**
     * settingsCode
     *
     * @var string
     */
    public $settingsCode = 'redhedded1_recaptcha_settings';
    /**
     * settingsFields
     *
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}
