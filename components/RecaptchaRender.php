<?php namespace Redhedded1\Recaptcha\Components;

use Redhedded1\Recaptcha\Models\Settings;


class RecaptchaRender extends \Cms\Classes\ComponentBase
{
  public $langArray = [
                'ar'     => 'Arabic',
                'af'     => 'Afriksans',
                'am'     => 'Amharic',
                'hy'     => 'Armenian',
                'az'     => 'Azerbaijani',
                'eu'     => 'Basque',
                'bn'     => 'Bengali',
                'bg'     => 'Bulgarian',
                'ca'     => 'Catalan',
                'zh-HK'  => 'Chinese (Hong Kong)',
                'zh-CN'  => 'Chinese (Simplified)',
                'zh-TW'  => 'Chinese (Traditional)',
                'hr'     => 'Croatian',
                'cs'     => 'Czech',
                'da'     => 'Danish',
                'nl'     => 'Dutch',
                'en-GB'  => 'English (UK)',
                'en'     => 'English',
                'et'     => 'Estonian',
                'fil'    => 'Filipinio',
                'fi'     => 'Finnish',
                'fr'     => 'French',
                'fr-CA'  => 'French (Canadian)',
                'gl'     => 'Galician',
                'ka'     => 'Georgian',
                'de'     => 'German',
                'de-AT'  => 'German (Austria)',
                'de-CH'  => 'German (Switzerland)',
                'el'     => 'Greek',
                'gu'     => 'Gujarati',
                'iw'     => 'Hebrew',
                'hi'     => 'Hindi',
                'hu'     => 'Hungarian',
                'is'     => 'Icelandic',
                'id'     => 'Indonesian',
                'it'     => 'Italian',
                'ja'     => 'Japanese',
                'kn'     => 'Kannada',
                'ko'     => 'Korean',
                'lo'     => 'Laothian',
                'lv'     => 'Latvian',
                'lt'     => 'Lithuanian',
                'ms'     => 'Malay',
                'ml'     => 'Malayalam',
                'mr'     => 'Marathi',
                'mn'     => 'Mongolian',
                'no'     => 'Norwegian',
                'fa'     => 'Persian',
                'pl'     => 'Polish',
                'pt'     => 'Portugese',
                'pt-BR'  => 'Portugese (Brazil)',
                'pt-PT'  => 'Portugese (Portugal)',
                'ro'     => 'Romanian',
                'ru'     => 'Russian',
                'sr'     => 'Serbian',
                'sl'     => 'Sinhalese',
                'sk'     => 'Slovak',
                'sl'     => 'Slovenian',
                'es'     => 'Spanish',
                'es-419' => 'Spanish (Latin America)',
                'sw'     => 'Swahili',
                'sv'     => 'Swedish',
                'ta'     => 'Tamil',
                'te'     => 'Telugu',
                'th'     => 'Thai',
                'tr'     => 'Turkish',
                'uk'     => 'Ukranian',
                'ur'     => 'Urdu',
                'vi'     => 'Vietnamese',
                'zu'     => 'Zulu'
              ];
  /**
   * componentDetails
   * @return array
   */
    public function componentDetails()
    {
        return [
            'name' => 'Recaptcha Render',
            'description' => 'Renders the recaptcha form'
        ];
    }
  /**
   * recaptcha_render
   * @return array
   */
 /**
   * onRender
   */
    public function onRender()
    {
        $this->page['lang'] = $this->property('lang');
        $this->page['theme'] = $this->property('theme');
        return [\Recaptcha::render([
            'lang' => $this->property('lang'),
            'theme' =>$this->property('theme')
            ])
        ];
    }
    /**
     * onRun
     *
     */
    public function onRun()
    {
        $this->page['lang'] = $this->property('lang');
        $this->page['theme'] = $this->property('theme');
    }
  /** defineProperties
   * @return array
   */
  public function defineProperties()
  {
      return [
          'lang' => [
              'title'             => 'Language',
              'default'           => 'en',
              'type'              => 'dropdown',
              'placeholder'       => 'Select Language',
              'options'           => $this->langArray
           ],
            'theme' => [
              'title'             => 'Theme',
              'description'       => 'The theme of the reCAPTCHA form',
              'default'           => 'light',
              'type'              => 'dropdown',
              'placeholder'       => 'Select Theme',
              'options'           => ['light' => 'Light', 'dark' => 'Dark']
            ]
        ];
    }
}
