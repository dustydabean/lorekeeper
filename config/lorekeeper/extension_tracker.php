<?php
return [

    // FORMAT EXAMPLE.
    //
    // 'extension_tracker' => [
    //     'key' => 'extension_tracker',
    //     'wiki_key' => 'Extension_Tracker',
    //     'creators' => json_encode([
    //         'Uri' => 'https://github.com/preimpression/',
    //     ]),
    //     'version' => '1.0.0',
    // ],
    
    'dailies' => [
        'key' => 'dailies',
        'wiki_key' => 'Dailies',
        'creators' => json_encode([
            'Cylunny' => 'https://toyhou.se/cylunny',
        ]),
        'version' => '2.0.1', 
    ],

    'theme_manager' => [
        'key' => 'theme_manager',
        'wiki_key' => 'Theme Manager',
        'creators' => json_encode([
            'Uri' => 'https://github.com/preimpression/',
            'Cylunny' => 'https://toyhou.se/cylunny',
            'moif' => 'https://toyhou.se/moif'
        ]),
        'version' => '2.0.0', // Big update with Cylunny's Theme manager + Moif's work merging the two!
    ],

    'staff-team-page' => [
        'key' => 'staff_team_page',
        'wiki_key' => 'Staff_Team_Page',
            'creators' => json_encode([
            'AnimatedCritter' => 'https://github.com/animatedcritter/',
        ]),
        'version' => '1.0.0',
    ],
];
