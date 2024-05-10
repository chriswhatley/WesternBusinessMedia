<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'siteTitle' => 'Western Business Media',
    'siteDescription' => 'Western Business Media publish leading business-to-business titles across a wide variety of UK sectors as well as being the organisers of the prestigious Safety & Health Excellent Awards, Fire & Security Matters Awards and numerous live events.',
    // 'collections' => [
    // 	'journals' => ['sort' => 'sort-order'],
    // ],

    'collections' => [  
    	'testimonials',
    	'journals' => ['sort' => 'sort-order'],
        'events' => ['sort' => 'sort-order'],
    ],
];
