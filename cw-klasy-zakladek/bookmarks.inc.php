<?php
/**
 * Bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

/**
 * Class Bookmarks.
 */
class Bookmarks
{
    /**
     * Bookmarks.
     *
     * @var array $bookmarks
     */
    protected $bookmarks = [];

    /**
     * Constructor - initialize bookmarks with explicit IDs
     */
    public function __construct()
    {
        $this->bookmarks = [
            1 => [
                'id'    => 1,
                'title' => 'PHP manual',
                'url'   => 'https://www.php.net',
                'tags'  => ['PHP', 'manual'],
            ],
            2 => [
                'id'    => 2,
                'title' => 'Silex',
                'url'   => 'http://silex.sensiolabs.org',
                'tags'  => ['PHP', 'framework', 'Silex'],
            ],
            3 => [
                'id'    => 3,
                'title' => 'Learn Git Branching',
                'url'   => 'http://learngitbranching.js.org',
                'tags'  => ['tools', 'Git', 'VCS', 'tutorials'],
            ],
            4 => [
                'id'    => 4,
                'title' => 'PhpStorm',
                'url'   => 'https://www.jetbrains.com/phpstorm',
                'tags'  => ['tools', 'IDE', 'PHP'],
            ],
            5 => [
                'id'    => 5,
                'title' => 'Twig',
                'url'   => 'http://twig.sensiolabs.org',
                'tags'  => ['tools', 'templates', 'Twig', 'Silex', 'PHP'],
            ],
        ];
    }

    /**
     * Find all bookmarks.
     *
     * @return array Result
     */
    public function findAll(): array 
    {
        return $this->bookmarks;
    }

    /**
     * Find bookmark by its id.
     *
     * @param integer $id Bookmark id
     *
     * @return array Result
     */
    public function findOneById(int $id): array 
    {
        foreach ($this->bookmarks as $bookmark) {
            if (isset($bookmark['id']) && (int)$bookmark['id'] === $id) {
                return $bookmark;
            }
        }
        return [];
    }
}