<?php

return [
    'Welcome' => 'snippets/welcome',
    'Ruby' => 'snippets/ruby',
    'R' => 'snippets/r',
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
    'Rails' => 'snippets/rails',
    'React' => 'snippets/react',
    'Vue' => 'snippets/vue',
    'Vim' => 'snippets/vim',
    'Kubernetes' => 'snippets/kubernetes',
    'Bash' => 'snippets/bash',
    'CSS' => 'snippets/css',
];
