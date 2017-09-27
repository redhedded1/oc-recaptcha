<?php namespace Redhedded1\Recaptcha\Controllers;

use Backend\Classes\Controller;

/**
 * Class: RecaptchaKeys
 *
 * @see Controller
 */
class RecaptchaKeys extends Controller
{
    /**
     * implement
     *
     * @var string
     */
    public $implement = ['Backend.Behaviors.FormController'];
    /**
     * formConfig
     *
     * @var string
     */
    public $formConfig = ['form_config.yaml'];


    /**
     * __construct
     *
     */
    public function __construct(){
        parent::__construct();
    }
}
