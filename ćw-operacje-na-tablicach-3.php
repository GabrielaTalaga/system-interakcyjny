<?php
$tab = ['plum', 'orange', 'banana', 'apple'];

// Sortowanie w porządku leksykalnym
sort($tab);

echo '<pre>';
print_r($tab);
echo '</pre>';
?>





<?php
$tab = ['first_name' => 'Mark', 'surname' => 'Brown', 'age' => '21'];

// Sortowanie według kluczy w porządku leksykalnym
ksort($tab);

echo '<pre>';
print_r($tab);
echo '</pre>';
?>




<?php
$persons = [
    [
        'first_name' => 'Mark', 
        'surname' => 'Brown',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'Smith',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
    ],
];


//Kopie tablicy do osobnego sortowania
$sorted_by_first_name = $persons;
$sorted_by_surname = $persons;

// Sortowanie według imion
usort($sorted_by_first_name, function($a, $b) {
    return strcmp($a['first_name'], $b['first_name']); 
});


// Sortowanie według nazwisk
usort($sorted_by_surname, function($a, $b) { 
    return strcmp($a['surname'], $b['surname']);
});

// Wyświetlenie wyników
echo "<h3>Posortowane według imion:</h3>";
echo '<pre>';
print_r($sorted_by_first_name);
echo '</pre>';

echo "<h3>Posortowane według nazwisk:</h3>";
echo '<pre>';
print_r($sorted_by_surname);
echo '</pre>';
?>






