<?php
$tab = ['plum', 'orange', 'banana', 'apple'];

// Zamiana  liter na wielkie
$uppercased = array_map('strtoupper', $tab);

// Wyświetlenie wyniku
echo '<pre>';
print_r($uppercased);
echo '</pre>';
?>