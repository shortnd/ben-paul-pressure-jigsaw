<?php

return [
    'baseUrl' => '',
    'production' => false,
    'assets_prefix' => '/',
    'collections' => [
      'latest_jobs' => [
        'sort' => '-date'
      ],
      'pages',
      'about',
      'services' => [
        'sort' => 'sequence'
      ],
      'home',
      'service',
      'contact'
    ],
    'email' => 'email@email.com',
    'telephone' => '313-313-3311',
    'facebook_link' => 'facebook.com',
    'percentage' => '.45',
    'highPercentage' => '.60',
    'slides' => [
      [
        'img' => '/assets/images/slide-1.jpg',
        'alt' => 'first slide'
      ]
    ],
];
