<?php
require_once 'bookmarks.inc.php';
require_once 'bookmarks.php';
require_once 'bookmarksDb.php';

// Choose which class to use (Csv or Db, now Csv)
$bookmarks = new BookmarksCsv();
//$bookmarks = new BookmarksDb();

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


