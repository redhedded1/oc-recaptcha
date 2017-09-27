<?php

namespace Redhedded1\Recaptcha;

use App;
use Illuminate\Foundation\AliasLoader;
use System\Classes\PluginBase;
use Config;

class Plugin extends PluginBase{
  /**
   * pluginDetails
   *
   */
  public function pluginDetails(){
    return [
      'name' => 'Recaptcha V2',
      'description' => 'Extends Gregg Gilbert\'s Recaptcha Plugin for OctoberCMS',
      'author' => 'Larry A. Ball',
      'homepage' => 'https://larryaball.net',
      'icon' => 'icon-unlock'
    ];
  }
  /**
   * boot
   *
   */
  public function boot(){
    $pluginNamespace = str_replace('\\', '.',  strtolower(__NAMESPACE__));
    $aliasLoader = AliasLoader::getInstance();
    $packages = Config::get($pluginNamespace . '::packages');
    foreach($packages as $name => $options){
      if(!empty($options['config']) && !empty($options['config_namespace'])){
        Config::set($options['config_namespace'], $options['config']);
        if(!empty($options['providers'])){
          foreach($options['providers'] as $provider){
            App::register($provider);
          }
        }
        if(!empty($options['aliases'])){
          foreach($options['aliases'] as $alias => $path){
            $aliasLoader->alias($alias, $path);
          }
        }
      }
    }
  }
  /**
   * registerComponents
   *
   */
  public function registerComponents(){
    return [
      'Redhedded1\Recaptcha\Components\RecaptchaRender' => 'recaptcha'
    ];
  }
 /**
   * registerSettings
   *
   */
  //public function registerSettings(){
    //return [
       //'location' => [
          //'label' => 'reCAPTCHA',
          //'description' => 'Manage reCAPTCHA settings',
          //'category' => 'Misc',
          //'icon' => 'icon-unlock',
          //'class' => 'Redhedded1\Recaptcha\Models\Settings',
          //'order' => 500,
          //'keywords' => 'recaptcha forms',
          //'permissions' => ['redhedded1.recaptcha.access_settings']
        //]
      //];
  //}
}
