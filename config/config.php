<?php return [
      // This contains the Laravel Packages that you want this plugin to utilize listed under their package identifiers
     'packages' => [
      'greggilbert\recaptcha' => [
  // Service providers to be registered by your plugin
        'providers' => [
              '\Greggilbert\Recaptcha\RecaptchaServiceProvider',
        ],
        'aliases' => [
              'Recaptcha' => '\Greggilbert\Recaptcha\Facades\Recaptcha',
            ],
        'config_namespace' => 'recaptcha',
        'config' => [
          'encoding'      => 'UTF-8',
          'finalize'      => true,
          'cachePath'     => storage_path('app/recaptcha'),
          'cacheFileMode' => 0755,
          'settings'      => [
            'default' => [
                 'HTML.Doctype'             => 'XHTML 1.0 Strict',
                 'HTML.Allowed'             => 'div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
                 'CSS.AllowedProperties'    => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
                 'AutoFormat.AutoParagraph' => true,
                 'AutoFormat.RemoveEmpty'   => true,
             ],
             'test' => [
                'Attr.EnableID' => true
              ],
             'youtube' => [
               'HTML.SafeIframe' => true,
               'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
              ],
            ],
          ],
        ],
      ],
    ];
