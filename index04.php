<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
print_r($cities);

//HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
echo "<ul>
        <li>$cities[1];</li>
     </ul>";

//Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
$cities[] = 'Tokijas';
print_r($cities);

//Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
$cities2 = [
    'tokijas' => '13.6',
    'vasingtonas' => '0.6',
    'maskva' => '11.5'
];

print_r($cities2);

//Pridėk: londonas - 8.6
$cities2['londonas'] = 8.6;
print_r($cities2);

// HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.
echo "<ul>
        <li> Gyventojų skaičius: {$cities2['tokijas']} mln.; </li>
    </ul>";
?>
