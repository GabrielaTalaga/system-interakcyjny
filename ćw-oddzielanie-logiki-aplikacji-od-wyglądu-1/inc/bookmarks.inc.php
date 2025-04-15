<?php
/**
 * Data file.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

/**
 * Find all records.
 *
 * @return array Result
 */
function find_all() : array
{
    return [
        [
            'title' => 'PHP manual',
            'url'   => 'https://www.php.net',
            'tags'  => [
                'PHP',
                'manual',
            ],
        ],
        [
            'title' => 'Silex',
            'url'   => 'http://silex.sensiolabs.org',
            'tags'  => [
                'PHP',
                'framework',
                'Silex',
            ],
        ],
        [
            'title' => 'Learn Git Branching',
            'url'   => 'http://learngitbranching.js.org',
            'tags'  => [
                'tools',
                'Git',
                'VCS',
                'tutorials',
            ],
        ],
        [
            'title' => 'PhpStorm',
            'url'  => 'https://www.jetbrains.com/phpstorm',
            'tags' => [
                'tools',
                'IDE',
                'PHP',
            ],
        ],
        [
            'title' => 'Twig',
            'url'  => 'http://twig.sensiolabs.org',
            'tags' => [
                'tools',
                'templates',
                'Twig',
                'Silex',
                'PHP',
            ],
        ],
    ];
}

function find_one_by_id(int $id): ?array
{
    $bookmarks = find_all();
    return $bookmarks[$id] ?? null;
}