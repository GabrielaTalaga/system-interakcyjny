<?php

//Pobieranie danych z formularza
function get_request_data($source, $pattern) {
    $result = [];  // Tablica w której przechowywane wyniki

    // ucinanie kbialych koncowek z warunkami
    foreach ($pattern as $field) {
        // Sprawdzenie czy pole istnieje w źródle danych 
        // Jeśli istnieje, usuwamy białe znaki i zapisujemy w tablicy 
        // Jeśli nie, pusty ciąg
        $result[$field] = isset($source[$field]) ? trim($source[$field]) : '';
    }

    return $result;
}

// Tablica wzorca
$request_pattern = ['firstname', 'lastname', 'email', 'age'];

// Pobieranie danych z formularza 
$data_from_request = get_request_data($_POST, $request_pattern);

// Wyświetlanie danych (do testów)
echo '<pre>';
print_r($data_from_request);
echo '</pre>';

?>
