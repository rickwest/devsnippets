<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Dev Snippets',
    'siteDescription' => 'A collection of useful code snippets for new developers!',

    // Algolia DocSearch credentials
    'docsearchApiKey' => '3fab51cde0f6a11ce324c7decd2b14c7',
    'docsearchIndexName' => 'devsnippets',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
