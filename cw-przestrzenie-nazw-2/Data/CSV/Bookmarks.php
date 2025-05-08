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
namespace Data\CSV;
class Bookmarks
{
    /**
     * Bookmarks.
     *
     * @var array $bookmarks
     */
    protected $bookmarks = [];
    protected $handle = null;//for destructor

    /**
     * Bookmarks constructor.
     */
    public function __construct()
    {
        $this->bookmarks = $this->loadData();
    }

    /**
     * Bookmarks destructor.
     */
    public function __destruct()
    {
        if (is_resource($this->handle)) {
            fclose($this->handle);
        }
    }
    /**
     * Destructor test

     *public function __destruct()
     *{
     *   if (is_resource($this->handle)) {
     *      fclose($this->handle);
     *     echo "Plik został zamknięty w destruktorze.\n"; //  TEST
     *} else {
     *       echo "Nie było otwartego pliku do zamknięcia.\n"; // 👈 TEST
     *  }
     *}
         */



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

    /**
     * Load data from CSV file.
     *
     * @see https://www.php.net/manual/en/function.fgetcsv.php
     *
     * @return array Result
     */
    protected function loadData(): array
    {
        $fileName = dirname(__FILE__) . '/bookmarks.csv';
        $handle = $this->openFile($fileName);
        if (!$handle) {
            return [];
        }

        [$headers, $dataRows] = $this->readFileContents($handle);
        fclose($handle);

        $headers = $this->prepareHeaders($headers);
        return $this->combineDataWithHeaders($headers, $dataRows);
    }



    /**
     * Open the CSV file for reading.
     *
     * @param string $fileName Path to the CSV file
     *
     * @return resource|false File handle or false on failure
     */
    protected function openFile(string $fileName)
    {
        return fopen($fileName, 'r');
    }


    /**
     * Read headers and data rows from the opened CSV file.
     *
     * @param resource $handle File handle
     *
     * @return array Two-element array: [headers, data]
     */
    protected function readFileContents($handle): array
    {
        $headers = [];
        $data = [];
        $rowCounter = 0;

        while (($row = fgetcsv($handle, 1000, ',', '\'')) !== false) {
            if ($rowCounter === 0) {
                $headers = $row;
            } else {
                $data[] = $row;
            }
            $rowCounter++;
        }

        return [$headers, $data];
    }



    /**
     * Normalize headers from the first CSV row.
     *
     * @param array $headers Array of headers from CSV
     *
     * @return array Normalized headers (lowercase, trimmed)
     */
    protected function prepareHeaders(array $headers): array
    {
        foreach ($headers as &$header) {
            $header = mb_strtolower(trim($header), 'UTF-8');
        }
        unset($header);
        return $headers;
    }

    /**
     * Combine headers with data rows into associative arrays.
     *
     * @param array $headers Headers to map data
     * @param array $data Raw CSV data rows
     *
     * @return array Array of bookmark records
     */
    protected function combineDataWithHeaders(array $headers, array $data): array
    {
        $result = [];

        foreach ($data as $row) {
            $rowAssoc = [];
            foreach ($row as $index => $value) {
                $key = $headers[$index] ?? "col$index";
                if ($key === 'tags') {
                    $rowAssoc[$key] = array_map('trim', explode(',', $value));
                } else {
                    $rowAssoc[$key] = trim($value, " '\"");
                }
            }

            // use 'id' as key
            $id = isset($rowAssoc['id']) ? (int)$rowAssoc['id'] : null;
            if ($id !== null) {
                $result[$id] = $rowAssoc;
            }
        }

        return $result;
    }
}