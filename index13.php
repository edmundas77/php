<?php
// - Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir metodą pasisveikinimui.
class Men {
    public $vardas;
    public $pavardė;

    public function labas() {
        return 'Labas aš esu ' . $this -> vardas . '<br>' . $this -> pavardė . '<br>';
    }
}

// - Sukurk du žmones su skirtingais duomenimis.
$jonas = new Men();
$antanas = new Men();

$jonas -> vardas = "Jonas";
$jonas -> pavardė = "Jonaitis";

$antanas -> vardas = "Antanas";
$antanas -> pavardė = "Antanaitis";

echo $jonas -> labas();
echo $antanas -> labas();
?>
