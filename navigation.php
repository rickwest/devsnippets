<?php

return [
    'Welcome' => 'snippets/welcome',
    'C#' => 'snippets/csharp',
    'C++' => 'snippets/c',
    'Docker' => 'snippets/docker',
    'Git' => 'snippets/git',
    'Java' => 'snippets/java',
    'Javascript' => 'snippets/javascript',
    'PHP' => [
        'children' => [
            'DateTime' => 'snippets/php/datetime',
            'Tooling' => 'snippets/php/tools',
            'Arrays' => 'snippets/php/arrays'
        ]
    ],
    'Python' => 'snippets/python',
    'React' => 'snippets/react',
    'Vue' => 'snippets/vue',
    'Vim' => 'snippets/vim',
    'Kubernetes' => 'snippets/kubernetes',
    'REST API' => 'snippets/restapi'
];
