<?php

return [
    'Welcome' => 'snippets/welcome',
    'Docker' => 'snippets/docker',
    'Git' => 'snippets/git',
    'PHP' => [
        'children' => [
            'DateTime' => 'snippets/php/datetime',
            'Tooling' => 'snippets/php/tools',
        ]
    ],
    'React' => 'snippets/react',
    'Vue' => 'snippets/vue',
];
