<?php
require_once 'Data/CSV/Bookmarks.php';
require_once 'Data/Db/Bookmarks.php';
require_once 'Data/Arr/Bookmarks.php';
require_once 'Data/Exception/BookmarksException.php';

use Data\CSV\Bookmarks as CsvBookmarks;
use Data\Db\Bookmarks as DbBookmarks;
use Data\Arr\Bookmarks as ArrBookmarks;
use Data\Exception\BookmarksException;

try {
    // Wybierz implementację:
    $bookmarks = new CsvBookmarks();
    // $bookmarks = new DbBookmarks();
    // $bookmarks = new ArrBookmarks();

    // Destructor test
    //echo "Obiekt został utworzony.\n";

    // Display all bookmarks
    echo '<pre>';
    print_r($bookmarks->findAll());
    echo '</pre>';

    // Display a single bookmark by ID
    $bookmark = $bookmarks->findOneById(3);
    echo '<pre>';
    print_r($bookmark);
    echo '</pre>';
} catch (BookmarksException $e) {
    echo '<p><strong>Błąd:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
}

