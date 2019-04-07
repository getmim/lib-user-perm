<?php

return [
    '__name' => 'lib-user-perm',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-perm.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-perm' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user' => NULL
            ],
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibUserPerm\\Service' => [
                'type' => 'file',
                'base' => 'modules/lib-user-perm/service'
            ],
            'LibUserPerm\\Model' => [
                'type' => 'file',
                'base' => 'modules/lib-user-perm/model'
            ]
        ],
        'files' => []
    ],
    'service' => [
        'can_i' => 'LibUserPerm\\Service\\CanI'
    ]
];