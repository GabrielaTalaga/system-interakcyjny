<?php

/**
 * Class BookmarksDb
 *
 * Handles retrieving bookmark data from a simple SQL file
 */
class BookmarksDb
{
    /** @var array */
    private $bookmarks = [];

    /** Constructor - loads data from the SQL file */
    public function __construct()
    {
        $this->loadData();
    }

    /**
     * Load data from SQL file (bookmarks.sql)
     */
    private function loadData()
    {
        $fileName = dirname(__FILE__) . '/bookmarks.sql';
        $sql = file_get_contents($fileName);

        preg_match_all(
            "/\(\s*(\d+)\s*,\s*'([^']*)'\s*,\s*'([^']*)'\s*,\s*'([^']*)'\s*\)/",
            $sql,
            $matches,
            PREG_SET_ORDER
        );

        foreach ($matches as $m) {
            list(, $id, $title, $url, $tags) = $m;
            $this->bookmarks[] = [
                'id'    => (int) $id,
                'title' => $title,
                'url'   => $url,
                'tags'  => array_map('trim', explode(',', $tags)),
            ];
        }
    }

    /**
     * Find all bookmarks.
     *
     * @return array
     */
    public function findAll(): array
    {
        return $this->bookmarks;
    }

    /**
     * Find a bookmark by its ID.
     *
     * @param int $id
     * @return array
     */
    public function findOneById(int $id): array
    {
        foreach ($this->bookmarks as $b) {
            if ($b['id'] === $id) {
                return $b;
            }
        }
        return [];
    }
}
