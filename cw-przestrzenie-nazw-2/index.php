<?php
require_once 'Data/CSV/Bookmarks.php';
require_once 'Data/Db/Bookmarks.php';
require_once 'Data/Arr/Bookmarks.php';

use Data\CSV\Bookmarks as CsvBookmarks;
use Data\Db\Bookmarks as DbBookmarks;
use Data\Arr\Bookmarks as ArrBookmarks;

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


