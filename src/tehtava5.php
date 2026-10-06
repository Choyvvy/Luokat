<?php
class Kirja {
    public $nimi;
    public $kirjailija;
    public $sivumaara;
}

$kirja = new Kirja();

$kirja->nimi = "Game of thrones";
$kirja->kirjailija = "George R. R. Martin";
$kirja->sivumaara = 807;

echo "Kirjan nimi: " . $kirja->nimi . "<br>";
echo "Kirjailija: " . $kirja->kirjailija . "<br>";
echo "Sivumäärä: " . $kirja->sivumaara;
?>