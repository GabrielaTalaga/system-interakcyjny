<?php
$persons = [
    [
        'first_name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
        'age' => '22',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'Smith',
        'age' => '18',
    ],
];

//Zwiększamy wiek każdej osoby o 1 – przez referencję &
foreach ($persons as &$person) {
    $person['age'] += 1;
}
unset($person); // Bezpieczne zakończenie referencji

//Wyświetlamy dane jako tabelę HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>First Name</th><th>Surname</th><th>Age</th></tr>";

foreach ($persons as $person) {
    echo "<tr>";
    echo "<td>" . strtoupper($person['first_name']) . "</td>"; // imię wielkimi literami
    echo "<td>" . htmlspecialchars($person['surname']) . "</td>";
    echo "<td>" . htmlspecialchars($person['age']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>